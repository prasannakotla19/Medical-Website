<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Services</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
        }

        header {
            background-color: rgba(44, 62, 80, 0.9);
            color: white;
            padding: 30px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        .services {
            padding: 40px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.9);
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .service {
            display: inline-block;
            width: 220px;
            margin: 20px;
            height: 250px;
            text-align: center;
            background-color: white;
            padding: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            transition: transform 0.3s;
        }

        .service:hover {
            transform: scale(1.05);
        }

        .service img {
            width: 60px;
            margin-bottom: 15px;
        }

        .service h3 {
            color: #34495e;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .service p {
            color: #7f8c8d;
            font-size: 14px;
        }

        footer {
            background-color: rgba(44, 62, 80, 0.9);
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        @media (max-width: 768px) {
            .service {
                width: 100%;
                margin: 10px 0;
            }

            .services {
                margin: 10px;
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Welcome to Our Hospital</h1>
        <p>We provide world-class medical services for all your healthcare needs.</p>
    </header>

    <section class="services">
        <h2>Our Services</h2>

        <div class="service">
            <img src="https://play-lh.googleusercontent.com/cpEDKgmo8TtWKLa0mZ9-znuPvlsYfW9ryENnswvFBURRayAFcQux74HOt9pFTAvzng=w480-h960-rw" alt="Free Checkups">
            <h3>Free Checkups</h3>
            <p>We offer regular free health checkups for early diagnosis and prevention.</p>
        </div>

        <div class="service">
            <img src="https://t3.ftcdn.net/jpg/05/68/54/86/240_F_568548627_MprERye97CNuywUTNSW9ZCET4M5bSyXe.jpg" alt="24/7 Ambulance">
            <h3>24/7 Ambulance</h3>
            <p>Our ambulance services are available 24/7 for emergencies and patient transport.</p>
        </div>

        <div class="service">
            <img src="https://cdn.vectorstock.com/i/1000v/94/13/expert-doctor-medical-center-logo-design-vector-45879413.avif" alt="Expert Doctors">
            <h3>Expert Doctors</h3>
            <p>We have a team of highly experienced and specialized doctors across various fields.</p>
        </div>

        <div class="service">
            <img src="https://thumbs.dreamstime.com/b/patient-icon-hospital-319874661.jpg?w=768" alt="Bed Facility">
            <h3>Bed Facility</h3>
            <p>Our hospital is equipped with modern and hygienic bed facilities for in-patient care.</p>
        </div>

        <div class="service">
            <img src="https://media.licdn.com/dms/image/v2/C4E22AQF81SqsGJa68A/feedshare-shrink_2048_1536/feedshare-shrink_2048_1536/0/1672556497635?e=2147483647&v=beta&t=hk4pAKIRtBDrSpIJK13eVfXHXJ8NL52cbXxS6DkyKlM" alt="Total Care">
            <h3>Total Care</h3>
            <p>We offer holistic healthcare services to ensure complete patient satisfaction.</p>
        </div>

        <div class="service">
            <img src="https://www.shutterstock.com/shutterstock/photos/280856660/display_1500/stock-vector-health-care-cardio-prevention-logo-280856660.jpg" alt="Preventive Care">
            <h3>Preventive Care</h3>
            <p>Our preventive care services aim to reduce health risks through early detection.</p>
        </div>

        <div class="service">
            <img src="https://t3.ftcdn.net/jpg/03/02/81/92/240_F_302819236_djAKUCKpfGibSNUqxKr3jum0wEBvysnS.jpg" alt="Laboratory Services">
            <h3>Laboratory Services</h3>
            <p>We offer a wide range of lab services, including diagnostics and health screenings.</p>
        </div>

        <div class="service">
            <img src="https://img.freepik.com/premium-vector/medicine-logo-design-template_269830-1601.jpg?w=740" alt="Pharmacy">
            <h3>Pharmacy</h3>
            <p>Our hospital has an on-site pharmacy that provides medications and healthcare products.</p>
        </div>

    </section>

    <footer>
        <p>Contact us at (555) 123-4567 or visit us at our hospital location for more information.</p>
    </footer>

</body>
</html>
