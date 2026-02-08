import React, { useEffect, useState } from 'react';
import { Container, Typography, Box, Card, CardContent, CardMedia, Grid, CircularProgress, Alert } from '@mui/material';
import { eventService } from '../services/api';

interface Event {
  id: number;
  title: string;
  introtext: string;
  images: {
    image_intro: string;
  };
  created: string;
}

const Events: React.FC = () => {
  const [events, setEvents] = useState<Event[]>([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState('');

  useEffect(() => {
    const fetchEvents = async () => {
      try {
        const data = await eventService.getEvents();
        setEvents(data.data);
        setLoading(false);
      } catch (err) {
        setError('Failed to load events');
        setLoading(false);
      }
    };

    fetchEvents();
  }, []);

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
          Upcoming Events
        </Typography>
        <Grid container spacing={4}>
          {events.map((event) => (
            <Grid item xs={12} md={6} key={event.id}>
              <Card>
                {event.images?.image_intro && (
                  <CardMedia
                    component="img"
                    height="140"
                    image={event.images.image_intro}
                    alt={event.title}
                  />
                )}
                <CardContent>
                  <Typography gutterBottom variant="h5" component="h2">
                    {event.attributes.title}
                  </Typography>
                  <Typography variant="body2" color="text.secondary" paragraph>
                    {event.attributes.introtext}
                  </Typography>
                  <Typography variant="caption" color="text.secondary">
                    {new Date(event.attributes.created).toLocaleDateString()}
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

export default Events; 