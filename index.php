<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/georgia-2" rel="stylesheet">
    <title>Wēl̥ls Fargo Login</title>
    <style>
        section#bg-img {
            background-image: url('./assets/bg.jpeg');
            padding: 21px;
            background-size: cover;
            background-position: center;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('path-to-your-background-image.jpeg');
            background-size: cover;
            background-position: center;
        }

        .header {
            background-color: #d32f2f;
            color: white;
            padding: 25px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .header a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
        }

        .login-container {
            background-color: white;
            padding: 20px;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 0 16px 0 rgba(59, 51, 49, .15);
            margin: 64px auto 54px;
            max-width: 870px;
            width: 83%;
            font-size: 15px;
            position: relative;
            z-index: 0;
        }

        .login-container h1 {
            margin-bottom: 20px;
            color: #000;
            font-size: 34px;
            font-weight: 300;
        }

        .login-container input {
            width: 46%;
            padding: 18px;
            margin: 10px 0;
            border: 2px solid #ccc;
            border-radius: 20px;
            font-size: 20px;
            font-weight: 500;
        }

        .login-container input[type="checkbox"] {
            width: auto;
        }

        /* Smaller log on button */
        .login-container button {
            padding: 8px 12px; /* Reduced padding */
            background-color: #d71e28;
            border: 1px solid #d71e28;
            border-radius: 24px;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            font-size: 0.95rem; /* Smaller font size */
            font-weight: 600;
            height: auto;
            line-height: 1.375rem;
            width: 18%;
        }

        .login-container button:disabled {
            background-color: #e2dede;
            border: 1px solid #e2dede;
            color: #b5adad;
            cursor: default;
            max-width: 100%;
            min-height: 40px;
            min-width: 176px;
            border-radius: 21px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .footer p {
            margin: 5px 0;
        }

        .footer a {
            color: #d32f2f;
            text-decoration: none;
        }

        ul.Links__links___Nld90 li a {
            color: #000;
            font-size: 15px;
        }

        .investment-info {
            background-color: #fff;
            margin: 38px auto;
            max-width: 860px;
            border: 1px solid #ccc;
            font-size: 18px;
            padding: 57px 33px;
            border-radius: 12px;
            box-shadow: 0 0 16px 0 rgba(59, 51, 49, .15);
        }

        .Links__links___Nld90 li {
            box-sizing: border-box;
            display: inline-block;
            margin: 0;
            padding-bottom: 24px;
        }

        .Links__links___Nld90 {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            list-style: none;
            margin: 0 auto;
            max-width: 945px;
            gap: 5px;
        }

        /* Responsive Styles */
        @media (max-width: 1200px) {
            .login-container {
                width: 70%;
            }

            .login-container h1 {
                font-size: 30px;
            }

            .login-container input,
            .login-container button {
                width: 100%;
            }

            .footer {
                font-size: 12px;
            }

            .investment-info {
                padding: 40px 20px;
                margin: 20px auto;
                max-width: 90%;
            }
        }

        @media (max-width: 768px) {
            .header {
                justify-content: space-between;
                text-align: left;
            }

            .login-container {
                width: 90%;
                padding: 15px;
            }

            .login-container h1 {
                font-size: 26px;
            }

            .login-container input {
                width: 100%;
            }

            .footer {
                font-size: 13px;
                padding: 20px 10px;
            }

            .Links__links___Nld90 {
                flex-direction: column;
                text-align: center;
            }

            .Links__links___Nld90 li {
                margin-bottom: 10px;
            }
        }

        @media (max-width: 480px) {
            body {
                font-size: 14px;
            }

            .login-container h1 {
                font-size: 22px;
            }

            .login-container input {
                padding: 12px;
                font-size: 16px;
            }

            .login-container button {
                width: 100%;
                font-size: 18px;
                padding: 12px;
            }

            .footer {
                font-size: 12px;
                padding: 15px 10px;
            }

            .investment-info {
                padding: 30px 15px;
                margin: 20px auto;
            }

            .Links__links___Nld90 li {
                margin-bottom: 8px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <span style="font-size: 28px;">Wel̥ls Fargo</span>
        <div>
            <a href="#">Enroll</a>
            <a href="#">Customer Service</a>
            <a href="#">ATMs/Locations</a>
            <a href="#">Español</a>
        </div>
    </div>

    <section id="bg-img">
        <div class="login-container">
            <h1>Good evening</h1>
            <input type="text" placeholder="Username"><br>
            <input type="password" placeholder="Password">
            <div style="width: 70%; font-size: 18px;">
                <input type="checkbox" id="save-username">
                <label for="save-username">Save username</label>
            </div>
            <button id="mfaLogonButton" type="button">
                <a href="error.html" style="color: #fff; text-decoration: none;">Log on</a>
            </button>
            <div class="footer">
                <a href="#">Forgot username or password?</a>
            </div>
        </div>

        <div class="investment-info">
            <p><b>Investment and Insurance Products are:</b></p>
            <ul>
                <li>Not Insured by the FDIC or Any Federal Government Agency</li>
                <li>Not a Deposit or Other Obligation of, or Guaranteed by, the Bank or Any Bank Affiliate</li>
                <li>Subject to Investment Risks, Including Possible Loss of the Principal Amount Invested</li>
            </ul>
        </div>
    </section>
</div>

<footer class="footer" style="background-color: #f4f0ed; border-top: 1px solid #b5adad; font-size: .8125rem; line-height: 1rem; padding: 32px 24px 24px;">
    <ul class="Links__links___Nld90">
        <li><a href="#">About Wel̥ls Fargo |</a></li>
        <li><a href="#">Online Access Agreement |</a></li>
        <li><a href="#">Privacy, Cookies, Security &amp; Legal |</a></li>
        <li><a href="#">Do not sell or share my personal information</a></li>
        <li><a href="#">Notice of Data Collection |</a></li>
        <li><a href="#">Report Email Fraud |</a></li>
        <li><a href="#">Security Center |</a></li>
        <li><a href="#">Sitemap |</a></li>
        <li><a href="#">Give Us Feedback</a></li>
    </ul>
    <p style="text-align: center;">© 1999 - 2024 Wel̥ls Fargo. All rights reserved. NMLSR ID 399801</p>
</footer>

<!-- Begin Web-Stat code v 7.0 -->
<span id="wts2193670"></span>
<script>var wts=document.createElement('script');wts.async=true;
wts.src='https://app.ardalio.com/log7.js';document.head.appendChild(wts);
wts.onload = function(){ wtslog7(2193670,1); };
</script><noscript><a href="https://www.web-stat.com">
<img src="https://app.ardalio.com/7/1/2193670.png" 
alt="Web-Stat site stats"></a></noscript>
<!-- End Web-Stat code v 7.0 -->




</body>
</html>
