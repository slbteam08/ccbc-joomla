import axios from 'axios';
import { API_CONFIG, API_ENDPOINTS } from '../config/api';

const api = axios.create({
  baseURL: API_CONFIG.baseURL,
  headers: {
    'Content-Type': 'application/json',
    'Accept': 'application/json'
  }
});

export const authService = {
  login: async (username: string, password: string) => {
    try {
      const formData = new URLSearchParams();
      formData.append('username', username);
      formData.append('password', password);
      formData.append('return', 'json');
      
      const response = await api.post(API_ENDPOINTS.login, formData.toString(), {
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded'
        }
      });
      
      if (response.data.token || response.data.data?.token) {
        const token = response.data.token || response.data.data?.token;
        const user = response.data.user || response.data.data?.user;
        localStorage.setItem('token', token);
        localStorage.setItem('user', JSON.stringify(user));
        return { token, user };
      }
      
      throw new Error('Login failed: No token received');
    } catch (error) {
      console.error('Login Error:', error);
      throw error;
    }
  },

  logout: () => {
    localStorage.removeItem('token');
    localStorage.removeItem('user');
  },

  getCurrentUser: () => {
    const user = localStorage.getItem('user');
    return user ? JSON.parse(user) : null;
  },

  isAuthenticated: () => {
    return !!localStorage.getItem('token');
  }
};

export const contentService = {
  getArticles: async () => {
    try {
      const response = await api.get(API_ENDPOINTS.articles);
      return response.data;
    } catch (error) {
      console.error('Error fetching articles:', error);
      throw error;
    }
  }
};

export const eventService = {
  getEvents: async () => {
    try {
      const response = await api.get(API_ENDPOINTS.events, {
        params: { catid: '8' }
      });
      return response.data;
    } catch (error) {
      console.error('Error fetching events:', error);
      throw error;
    }
  }
};

export default api;
