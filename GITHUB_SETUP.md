# GitHub Setup Guide

Follow these steps to push your project to GitHub:

## First-time Setup

1. **Create a GitHub repository**

   - Go to [GitHub](https://github.com) and sign in
   - Click the "+" icon in the top right and select "New repository"
   - Name your repository (e.g., "RestaurantProject")
   - Choose public or private
   - Do NOT initialize with README, .gitignore, or license (we already have these)
   - Click "Create repository"

2. **Initialize Git in your local project**

   ```bash
   # Navigate to your project directory if you're not already there
   cd /path/to/RestaurantProject

   # Initialize git repository
   git init

   # Add all files to staging
   git add .

   # Commit your changes
   git commit -m "Initial commit"
   ```

3. **Link to GitHub repository**

   ```bash
   # Add the remote repository URL (replace USER with your GitHub username)
   git remote add origin https://github.com/YOUR_USERNAME/RestaurantProject.git

   # Push your code to GitHub
   git push -u origin main
   ```

## Making Changes

After your initial setup, whenever you make changes:

1. **Stage your changes**

   ```bash
   git add .
   ```

2. **Commit your changes with a descriptive message**

   ```bash
   git commit -m "Description of changes made"
   ```

3. **Push to GitHub**
   ```bash
   git push
   ```

## Best Practices

- Make frequent, small commits rather than infrequent, large ones
- Write clear, descriptive commit messages
- Use branches for new features or bug fixes
- Create pull requests for major changes
- Review the changes before committing them

## Additional Resources

- [GitHub Docs](https://docs.github.com/)
- [Git Cheat Sheet](https://education.github.com/git-cheat-sheet-education.pdf)
- [Pro Git Book](https://git-scm.com/book/en/v2)
