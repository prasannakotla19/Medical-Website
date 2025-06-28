<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Care Center</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header">
        <h1>Welcome to Medical Care Center</h1>
        <p>Your Health, Our Priority</p>
    </div>

    <div class="content">
        <section class="about">
            <h2>About Us</h2>
            <p>
                At Medical Care Center, we are committed to providing comprehensive healthcare services with state-of-the-art facilities and experienced professionals. 
                Our dedicated team ensures personalized care, tailored to meet the needs of every patient.
                we are committed to providing compassionate, patient-centered healthcare. Our mission is to promote the health and well-being of every individual by delivering high-quality medical care through cutting-edge technologies, innovative treatment methods, and a team of experienced, dedicated professionals.
            </p>
           <h2> Our Mission</h2>
            <p>Our mission is to enhance the quality of life for our patients through excellence in healthcare. We believe in empowering patients to make informed decisions about their health by providing the best care possible, rooted in compassion, respect, and professionalism.</p>
        </section>

        <section class="services">
            <h2>Our Services</h2>
            <ul>
                <li>General Health Checkup</li>
                <li>Cardiology</li>
                <li>Pediatrics</li>
                <li>Orthopedics</li>
                <li>Emergency Services</li>
            </ul>
        </section>

        <section class="contact">
            <h2>Contact Us</h2>
            <p>Email: contact@medicalcarecenter.com</p>
            <p>Phone: +123-456-7890</p>
        </section>
    </div>
</body>
/* Background and Layout */
<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-image: url('background.jpg'); /* Add your background image */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: #fff;
}

.header {
    text-align: center;
    padding: 50px 0;
    background-color: rgba(0, 0, 0, 0.6); /* Transparent background */
}

.header h1 {
    font-size: 3rem;
    margin-bottom: 10px;
}

.header p {
    font-size: 1.5rem;
}

.content {
    padding: 40px;
    background-color: rgba(0, 0, 0, 0.7);
}

section {
    margin-bottom: 40px;
}

h2 {
    font-size: 2rem;
    margin-bottom: 20px;
}

p, li {
    font-size: 1.2rem;
}

ul {
    list-style-type: none;
    padding: 0;
}

ul li {
    margin: 10px 0;
}

/* Contact Info Styling */
.contact p {
    font-size: 1.3rem;
}
</style>

</html>