<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://fonts.bunny.net/css?family=inter:500,600|montserrat:700" rel="stylesheet" />
    <style>
        .wrapper {
            background-color: #edf2f7;
            font-family: "Inter", sans-serif;
        }

        .greetings {
            font-weight: 600;
        }

        .card {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            margin: 0 2rem;
        }

        header {
            padding: 1rem 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo {
            height: 84px;
        }

        .body p {
            color: #575656;
        }

        footer p {
            padding: 0 1rem;
            font-size: 0.75rem;
            color: #898989;
        }

        a {
            color: rgb(105, 105, 223);
        }

        .regards {
            line-height: 0.125px;
        }

        .cta {
            margin-top: 2rem;
        }

        .cta .cta-button {
            border: 0;
            outline: 0;
            background-color: #c2d81d;
            color: white;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="wrapper" style="padding: 1rem">
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
                <div class="card">
                    <p class="greetings">Hello {{ $data["name"] }},</p>
                    <div class="body">
                        <p>
                            We regret to inform you that your seller account on PSU Marketplace has been blocked due to
                            a violation of our policies.
                        </p>
                        <p>
                            We take these matters seriously to ensure a safe and trustworthy marketplace for all our
                            users. If you believe this decision is in error or would like further clarification, please
                            contact our support team within the next 7 days
                        </p>

                        Best regards,</p>
                        <p class="regards">
                            PSU Marketplace Team
                        </p>

                        <div class="cta">
                            <a href="{{ route('home') }}" class="cta-button">
                                Go to psu marketplace
                            </a>
                        </div>
                    </div>
                </div>
                <footer>
                    <p>
                        Copyright ©
                        2023
                        Pangasinan State University
                        . All rights reserved.
                    </p>
                </footer>
            </tr>
        </table>
    </div>
</body>

</html>