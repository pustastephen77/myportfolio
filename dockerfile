# Base image with Node.js
FROM node:16-alpine

# Set the working directory in the container
WORKDIR /app

# Copy package files to the container
COPY package.json package-lock.json ./

# Install dependencies
RUN npm install

# Copy the rest of the application code
COPY . .

# Expose the application port
EXPOSE 3000

# Command to run your app
CMD ["npm", "start"]
