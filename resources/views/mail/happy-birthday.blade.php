<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* General Styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
      color: #333333;
    }

    table {
      border-spacing: 0;
      width: 100%;
    }

    img {
      max-width: 100%;
      height: auto;
      display: block;
    }

    /* Responsive Design */
    @media screen and (max-width: 600px) {
      .email-container {
        width: 100% !important;
        padding: 0 10px;
      }

      .button {
        width: 100% !important;
        display: block !important;
      }
    }

    /* Button Style */
    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #ff6b6b;
      color: #ffffff;
      text-decoration: none;
      border-radius: 5px;
      font-size: 16px;
      text-align: center;
    }

    .button:hover {
      background-color: #ff5252;
    }
  </style>
</head>
<body>
  <table class="email-container" align="center" width="600" cellpadding="0" cellspacing="0" style="max-width: 600px; background-color: #ffffff; margin: 20px auto; border: 1px solid #dddddd; border-radius: 8px; overflow: hidden;">
    <!-- Header Section -->
    <tr>
      <td style="background-color: #ff6b6b; padding: 20px; text-align: center; color: #ffffff; font-size: 24px; font-weight: bold;">
        Happy Birthday! 🎉
      </td>
    </tr>

    <!-- Body Section -->
    <tr>
      <td style="padding: 20px; text-align: left; font-size: 16px; line-height: 1.5;">
        <p>Hello {{ $user->name }},</p>
        <p>We’re so excited to have you here! Here’s what you can expect from us:</p>
        <ul style="padding-left: 20px;">
          <li>Exclusive updates and news</li>
          <li>Special offers and discounts</li>
          <li>Helpful tips and resources</li>
        </ul>
        <p>Click the button below to explore more:</p>
        <p style="text-align: center;">
          <a href="https://example.com" class="button">Explore Now</a>
        </p>
        <p>If you have any questions, feel free to reply to this email. We’d love to hear from you!</p>
      </td>
    </tr>

    <!-- Footer Section -->
    <tr>
      <td style="background-color: #f3f3f3; padding: 20px; text-align: center; font-size: 14px; color: #888888;">
        <p>You're receiving this email because you signed up for updates.</p>
        <p><a href="https://example.com/unsubscribe" style="color: #ff6b6b; text-decoration: none;">Unsubscribe</a></p>
      </td>
    </tr>
  </table>
</body>
</html>
