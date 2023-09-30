# Use an official Node.js runtime as a parent image
FROM node:14

# Set the working directory in the container
WORKDIR /app

# Copy package.json and package-lock.json to the container
COPY package*.json ./

# Install dependencies
RUN npm install

# Copy the rest of your React app files to the container
COPY . .

# Build your React app
RUN npm run build

# Expose a port if needed (e.g., if you're running a development server)
