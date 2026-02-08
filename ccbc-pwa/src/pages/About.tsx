import React from 'react';
import { Container, Typography, Box, Grid, Paper } from '@mui/material';

const About: React.FC = () => {
  return (
    <Container>
      <Box sx={{ my: 4 }}>
        <Typography variant="h4" component="h1" gutterBottom align="center">
          About CCBC
        </Typography>
        
        <Grid container spacing={4}>
          <Grid item xs={12} md={6}>
            <Paper sx={{ p: 3 }}>
              <Typography variant="h5" gutterBottom>
                Our Mission
              </Typography>
              <Typography paragraph>
                The Chinese Christian Bible Church is dedicated to spreading the Gospel
                and serving our community through faith, love, and fellowship.
              </Typography>
            </Paper>
          </Grid>
          
          <Grid item xs={12} md={6}>
            <Paper sx={{ p: 3 }}>
              <Typography variant="h5" gutterBottom>
                Our Vision
              </Typography>
              <Typography paragraph>
                We strive to be a welcoming community where people can grow in their
                relationship with God and with each other, while making a positive
                impact in our society.
              </Typography>
            </Paper>
          </Grid>
          
          <Grid item xs={12}>
            <Paper sx={{ p: 3 }}>
              <Typography variant="h5" gutterBottom>
                Our Values
              </Typography>
              <Typography paragraph>
                • Biblical Teaching: We are committed to teaching and living according to God's Word
              </Typography>
              <Typography paragraph>
                • Community: We foster meaningful relationships and support one another
              </Typography>
              <Typography paragraph>
                • Service: We actively serve our church and community
              </Typography>
              <Typography paragraph>
                • Worship: We gather to worship God in spirit and truth
              </Typography>
            </Paper>
          </Grid>
        </Grid>
      </Box>
    </Container>
  );
};

export default About; 