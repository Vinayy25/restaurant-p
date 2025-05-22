#!/bin/bash

# Restaurant Project Setup Script

echo "=== Restaurant Project Setup ==="
echo

# Check if .env file exists
if [ -f .env ]; then
    echo "Existing .env file found."
else
    echo "Creating .env file from template..."
    if [ -f env.example ]; then
        cp env.example .env
        echo "Created .env file from example template."
        echo "Please edit .env with your database credentials."
    else
        echo "ERROR: env.example file not found!"
        exit 1
    fi
fi

echo
echo "=== Setup Instructions ==="
echo "1. Make sure you have a web server (Apache/NGINX) with PHP 7.4+ installed"
echo "2. Configure your web server to point to this directory"
echo "3. Edit the .env file with your database credentials"
echo "4. Access the site through your web browser to automatically set up the database"
echo
echo "Done! Your Restaurant Project is ready to be set up." 