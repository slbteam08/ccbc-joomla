import React from 'react';
import { BrowserRouter as Router, Routes, Route, Link } from 'react-router-dom';
import { AppBar, Toolbar, Typography, Button, Container, Box } from '@mui/material';
import { AuthProvider, useAuth } from './contexts/AuthContext';
import Home from './pages/Home';
import About from './pages/About';
import Events from './pages/Events';
import MemberArea from './pages/MemberArea';
import ProtectedRoute from './components/ProtectedRoute';

const Navigation: React.FC = () => {
  const { isAuthenticated, logout } = useAuth();

  return (
    <AppBar position="static">
      <Toolbar>
        <Typography variant="h6" component="div" sx={{ flexGrow: 1 }}>
          CCBC
        </Typography>
        <Button color="inherit" component={Link} to="/">
          Home
        </Button>
        <Button color="inherit" component={Link} to="/about">
          About
        </Button>
        <Button color="inherit" component={Link} to="/events">
          Events
        </Button>
        {isAuthenticated ? (
          <>
            <Button color="inherit" component={Link} to="/member">
              Member Area
            </Button>
            <Button color="inherit" onClick={logout}>
              Logout
            </Button>
          </>
        ) : (
          <Button color="inherit" component={Link} to="/">
            Login
          </Button>
        )}
      </Toolbar>
    </AppBar>
  );
};

const App: React.FC = () => {
  return (
    <AuthProvider>
      <Router>
        <Box sx={{ display: 'flex', flexDirection: 'column', minHeight: '100vh' }}>
          <Navigation />
          <Box component="main" sx={{ flexGrow: 1, py: 3 }}>
            <Container>
              <Routes>
                <Route path="/" element={<Home />} />
                <Route path="/about" element={<About />} />
                <Route path="/events" element={<Events />} />
                <Route
                  path="/member"
                  element={
                    <ProtectedRoute>
                      <MemberArea />
                    </ProtectedRoute>
                  }
                />
              </Routes>
            </Container>
          </Box>
        </Box>
      </Router>
    </AuthProvider>
  );
};

export default App;
