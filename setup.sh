#!/bin/bash

echo "🚀 Setting up Drink Shop Laravel Backend..."

# Copy environment file
if [ ! -f .env ]; then
    cp .env.example .env
    echo "✅ Environment file created"
fi

# Build and start containers
echo "🐳 Starting Docker containers..."
docker-compose up -d --build

# Wait for database to be ready
echo "⏳ Waiting for database to be ready..."
sleep 30

# Install dependencies
echo "📦 Installing Composer dependencies..."
docker-compose exec app composer install

# Generate application key
echo "🔑 Generating application key..."
docker-compose exec app php artisan key:generate

# Install JWT Auth
echo "🔐 Installing JWT Auth..."
docker-compose exec app composer require tymon/jwt-auth
docker-compose exec app php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
docker-compose exec app php artisan jwt:secret

# Run migrations
echo "🗄️ Running database migrations..."
docker-compose exec app php artisan migrate

# Seed database
echo "🌱 Seeding database..."
docker-compose exec app php artisan db:seed

echo ""
echo "🎉 Backend setup complete!"
echo "📍 API URL: http://localhost:8000"
echo "🗄️ phpMyAdmin: http://localhost:8080"
echo ""
echo "👤 Test accounts:"
echo "   Admin: admin@drink.com / password"
echo "   Customer: customer@drink.com / password"
