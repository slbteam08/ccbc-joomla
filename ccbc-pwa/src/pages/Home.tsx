import React from 'react';
import { useAuth } from '../contexts/AuthContext';
import LoginForm from '../components/LoginForm';
import { Slider } from '@/components/ui/slider';
import { Button } from '@/components/ui/button';

const Home: React.FC = () => {
  const { isAuthenticated, user } = useAuth();

  const sliderContent = [
    {
      title: "Welcome to CCBC",
      subtitle: "Chinese Christian Bible Church",
      description: "A community of believers dedicated to serving God and our community",
      image: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=800&h=400&fit=crop",
      buttonText: "Learn More",
      buttonLink: "/about"
    },
    {
      title: "Join Our Services",
      subtitle: "Sunday Worship",
      description: "Experience the love of Christ through our weekly worship services",
      image: "https://images.unsplash.com/photo-1542810634-71277d95dcbb?w=800&h=400&fit=crop",
      buttonText: "Service Times",
      buttonLink: "/services"
    },
    {
      title: "Get Connected",
      subtitle: "Community Groups",
      description: "Build meaningful relationships and grow in faith together",
      image: "https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800&h=400&fit=crop",
      buttonText: "Join a Group",
      buttonLink: "/groups"
    }
  ];

  return (
    <div className="min-h-screen bg-gray-50">
      {/* Hero Slider */}
      <div className="relative h-96 md:h-[500px]">
        <Slider className="h-full">
          {sliderContent.map((slide, index) => (
            <div
              key={index}
              className="relative h-full w-full bg-cover bg-center bg-no-repeat"
              style={{ backgroundImage: `url(${slide.image})` }}
            >
              <div className="absolute inset-0 bg-black/40" />
              <div className="absolute inset-0 flex items-center justify-center">
                <div className="text-center text-white px-4">
                  <h1 className="text-4xl md:text-6xl font-bold mb-4">
                    {slide.title}
                  </h1>
                  <h2 className="text-xl md:text-2xl font-semibold mb-2">
                    {slide.subtitle}
                  </h2>
                  <p className="text-lg md:text-xl mb-6 max-w-2xl mx-auto">
                    {slide.description}
                  </p>
                  <Button size="lg" className="bg-white text-black hover:bg-gray-100">
                    {slide.buttonText}
                  </Button>
                </div>
              </div>
            </div>
          ))}
        </Slider>
      </div>

      {/* Main Content */}
      <div className="container mx-auto px-4 py-12">
        <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
          {/* About Section */}
          <div className="bg-white rounded-lg shadow-md p-6">
            <h2 className="text-2xl font-bold text-gray-800 mb-4">
              About CCBC
            </h2>
            <p className="text-gray-600 leading-relaxed">
              Welcome to the Chinese Christian Bible Church. We are a community of believers
              dedicated to serving God and our community. Our mission is to share the love of Christ
              and help people grow in their faith journey.
            </p>
            <div className="mt-6">
              <Button variant="outline">
                Learn More About Us
              </Button>
            </div>
          </div>
          
          {/* Login Section */}
          <div className="bg-white rounded-lg shadow-md p-6">
            {isAuthenticated ? (
              <div>
                <h2 className="text-2xl font-bold text-gray-800 mb-4">
                  Welcome back, {user?.name}!
                </h2>
                <p className="text-gray-600 mb-4">
                  You are now logged in. Visit the member area to access exclusive content.
                </p>
                <Button>
                  Go to Member Area
                </Button>
              </div>
            ) : (
              <div>
                <h2 className="text-2xl font-bold text-gray-800 mb-4">
                  Member Login
                </h2>
                <LoginForm />
              </div>
            )}
          </div>
        </div>

        {/* Quick Links */}
        <div className="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
          <div className="bg-white rounded-lg shadow-md p-6 text-center">
            <div className="text-4xl mb-4">📅</div>
            <h3 className="text-xl font-semibold mb-2">Service Times</h3>
            <p className="text-gray-600 mb-4">Join us every Sunday for worship</p>
            <Button variant="outline" size="sm">
              View Schedule
            </Button>
          </div>
          
          <div className="bg-white rounded-lg shadow-md p-6 text-center">
            <div className="text-4xl mb-4">📖</div>
            <h3 className="text-xl font-semibold mb-2">Bible Study</h3>
            <p className="text-gray-600 mb-4">Deepen your understanding of God's Word</p>
            <Button variant="outline" size="sm">
              Join Study
            </Button>
          </div>
          
          <div className="bg-white rounded-lg shadow-md p-6 text-center">
            <div className="text-4xl mb-4">🤝</div>
            <h3 className="text-xl font-semibold mb-2">Get Involved</h3>
            <p className="text-gray-600 mb-4">Serve and connect with our community</p>
            <Button variant="outline" size="sm">
              Volunteer
            </Button>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Home; 