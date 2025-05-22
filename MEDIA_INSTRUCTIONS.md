# Media Files Instructions

This repository excludes large media files to keep the repository size manageable. The following files are not tracked by Git:

## Excluded Media Files

- `customerSide/image/frontpagevedio.mp4`
- `customerSide/image/loginBackground.jpg`
- All video files (_.mp4, _.mov, _.wmv, _.avi, _.flv, _.webm)
- Large image files (_.psd, _.ai, _.tif, _.tiff, \*.bmp)
- PDF library: `adminSide/posBackend/fpdf186/`

## How to Get the Media Files

### Option 1: Download from Shared Storage

If you need these files for development or production:

1. Download them from [shared storage link to be provided]
2. Place them in their respective directories as listed above

### Option 2: Use Your Own Media

You can replace the excluded media files with your own:

- For `frontpagevedio.mp4`: Use any restaurant/food-themed video
- For `loginBackground.jpg`: Use any high-quality restaurant/food image

## PDF Library

The FPDF library (version 1.86) can be downloaded directly from the official website:

1. Download from: http://www.fpdf.org/
2. Extract and place in `adminSide/posBackend/fpdf186/`

## Alternative: Using CDN for Media

Consider modifying the code to use externally hosted media instead of local files for better performance:

```html
<!-- Example of using externally hosted video instead of local file -->
<video src="https://your-cdn-url.com/videos/restaurant-video.mp4"></video>

<!-- Example of using externally hosted image instead of local file -->
<img src="https://your-cdn-url.com/images/restaurant-background.jpg" />
```
