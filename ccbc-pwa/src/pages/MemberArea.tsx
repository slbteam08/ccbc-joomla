import React, { useEffect, useState } from 'react';
import { Container, Typography, Box, Card, CardContent, CardMedia, Grid, CircularProgress, Alert } from '@mui/material';
import { useAuth } from '../contexts/AuthContext';
import { contentService } from '../services/api';
import ProtectedRoute from '../components/ProtectedRoute';

interface Article {
  id: number;
  title: string;
  introtext: string;
  images: {
    image_intro: string;
  };
}

const MemberArea: React.FC = () => {
  const { isAuthenticated } = useAuth();
  const [articles, setArticles] = useState<Article[]>([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState('');

  useEffect(() => {
    const fetchArticles = async () => {
      try {
        const data = await contentService.getArticles();
        setArticles(data.data);
        setLoading(false);
      } catch (err) {
        setError('Failed to load articles');
        setLoading(false);
      }
    };

    if (isAuthenticated) {
      fetchArticles();
    }
  }, [isAuthenticated]);

  if (!isAuthenticated) {
    return (
      <Container>
        <Box sx={{ my: 4, textAlign: 'center' }}>
          <Typography variant="h5" gutterBottom>
            Please log in to access member content
          </Typography>
        </Box>
      </Container>
    );
  }

  if (loading) {
    return (
      <Box sx={{ display: 'flex', justifyContent: 'center', my: 4 }}>
        <CircularProgress />
      </Box>
    );
  }

  if (error) {
    return (
      <Container>
        <Alert severity="error" sx={{ my: 2 }}>{error}</Alert>
      </Container>
    );
  }

  return (
    <Container>
      <Box sx={{ my: 4 }}>
        <Typography variant="h4" component="h1" gutterBottom>
          Member Area
        </Typography>
        <Grid container spacing={4}>
          {articles.map((article) => (
            <Grid item xs={12} md={6} key={article.id}>
              <Card>
                {article.images?.image_intro && (
                  <CardMedia
                    component="img"
                    height="140"
                    image={article.images.image_intro}
                    alt={article.title}
                  />
                )}
                <CardContent>
                  <Typography gutterBottom variant="h5" component="h2">
                    {article.title}
                  </Typography>
                  <Typography variant="body2" color="text.secondary">
                    {article.introtext}
                  </Typography>
                </CardContent>
              </Card>
            </Grid>
          ))}
        </Grid>
      </Box>
    </Container>
  );
};

export default MemberArea; 