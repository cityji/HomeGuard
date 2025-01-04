<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join our Training Workshops</title>
    <?php
    include './anchor.php';
    ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: paleturquoise;
        }

        .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    background-color: #f4f4f4;
    font-size: 24px;
}

.logo {
    display: flex;
    align-items: center;
}

.logo img {
    height: 100px;
    margin-right: 30px;
    margin-left: 30px;
}

.social-icons a {
    margin-left: 10px;
}

.social-icons img {
    height: 30px;
    width: 30px;
    transition: transform 0.3s ease;
}

.social-icons img:hover {
    transform: scale(1.2);
}

/* News Ticker */
.news-ticker {
    background-color: #e74c3c;
    color: white;
    overflow: hidden;
    white-space: nowrap;
    padding: 5px 0;
    font-size: 24px;
}

.news-ticker h4 {
    font-size: 24px;
    display: inline-block;
    margin: 0;
    animation: scroll-left 20s linear infinite;
}

@keyframes scroll-left {
    from {
        transform: translateX(100%);
    }
    to {
        transform: translateX(-100%);
    }
}

/* Navbar */
.navbar {
    background-color: #34495e;
    display: flex;
    justify-content: space-around;
    position: fixed; /* Fixed position to stay on top */
    top: 0;
    left: 0;
    width: 100%; /* Make navbar full width */
    z-index: 1000; /* Ensure navbar is above all content */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Optional: Adds shadow for better visibility */
}

.navbar a {
    color: white;
    text-decoration: none;
    padding: 15px 20px; /* Adjusted padding for better spacing */
    display: block;
}

.navbar a:hover {
    background-color: #2c3e50;
}

/* Active page styling */
.navbar a.active {
    background-color: #1abc9c; /* Highlight color for the active page */
    color: white;
    font-weight: bold; /* Optional for emphasis */
}

/* Dropdown Menu */
.dropdown {
    position: relative;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #34495e;
    min-width: 160px;
    z-index: 1;
    top: 100%;
}

.dropdown-content a {
    color: white;
    padding: 10px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #2c3e50;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Body margin to avoid content overlap */
body {
    margin-top: 60px; /* Adjust according to the navbar height */
}

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: whitesmoke;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        }

        h1, h2, h2 {
            color: #34495e;
        }

        .section {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .section:nth-child(even) {
            flex-direction: row-reverse;
        }

        .section img {
            width: 20%;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            margin: 0 20px;
        }

        .section-text {
            flex: 1;
        }

        .section-text h2 {
            margin-bottom: 10px;
            text-align: center;
        }

        .section-text p {
            margin-bottom: 15px;
            font-size: 24px;
            text-align: justify;
        }

        footer {
    background-color: black;
    color: white;
    padding: 20px 0;
    font-family: Arial, sans-serif;
}

.footer-container {
    display: flex;
    justify-content: space-between;
    padding: 20px;
}

.footer-map iframe {
    border: 0;
    width: 200%;
    height: 400px;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    width: 50%;
}

.footer-nav {
    display: flex;
    flex-direction: column;
}

.footer-nav a {
    color: white;
    text-decoration: none;
    margin: 10px 0;
    padding: 5px 0;
    text-align: left;
}

.footer-nav a:hover {
    background-color: #2c3e50;
}

.footer-nav a.active {
    background-color: #e74c3c; /* Highlight color for active link */
    color: white;
}

.footer-logo {
    text-align: center;
}

.footer-logo img {
    height: 200px;
    margin-bottom: 10px;
}

.footer-logo h3 {
    margin: 0;
    font-size: 24px;
    font-weight: bold;
    
}

.footer-copyright {
    text-align: center;
    background-color: #2c3e50;
    padding: 10px;
    font-size: 14px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        align-items: center;
    }
    .footer-content {
        width: 100%;
        flex-direction: column;
        align-items: center;
    }
    .footer-nav {
        align-items: center;
    }
}
    </style>

<body>
<?php 
    require_once('./components/Nav.php');
?>



<div class="header">
        <div class="logo">
            <a href="index.html" target="blank">
            <img src="image/civildefencelogo.png" alt="Civil Defence Logo">
            <div></a>
                <h1><b>Civil Defence Indore</b></h1>
            </div>
        </div>
        <div class="social-icons">
            <a href="https://www.instagram.com" target="blank">
                <img src="image/instagram.jpg" alt="Instagram" title="Follow us on Instagram">
            </a>
            <a href="https://www.youtube.com" target="blank">
                <img src="image/youtube.png" alt="YouTube" title="Subscribe to our YouTube channel">
            </a>
            <a href="https://www.twitter.com" target="blank">
                <img src="image/x.webp" alt="Twitter" title="Follow us on Twitter">
            </a>
        </div>
    </div>

    <!-- News Ticker -->
    <div class="news-ticker">
        <h4>Latest News: Civil Defence conducts mock drill | New volunteer training program | Public safety awareness campaign starts soon | Stay safe, stay alert!</h4>
    </div>

     <!-- Navigation Bar -->
     <!-- Navigation Bar -->
<div class="navbar">
    <a href="index.html">Home</a>
    <div class="dropdown">
        <a href="#" class="active">About Us</a>
        <div class="dropdown-content">
            <a href="civildefence.html" class="active">Civil Defence</a>
            <a href="homeguard.html">Home Guard</a>
            <a href="#">SDERF</a>
        </div>
    </div>
    <div class="dropdown">
        <a href="#">Role of Organization</a>
        <div class="dropdown-content">
            <a href="#">Rescue Operations</a>
            <a href="#">Relief Work</a>
            <a href="#">Volunteer Training</a>
        </div>
    </div>
    <div class="dropdown">
        <a href="#">Safety Measures</a>
        <div class="dropdown-content">
            <a href="#">Disaster Preparedness</a>
            <a href="#">Safety Drills</a>
            <a href="#">Emergency Protocols</a>
        </div>
    </div>
    <div class="dropdown">
        <a href="#">Emergency Services</a>
        <div class="dropdown-content">
            <a href="#">Home Guard</a>
            <a href="#">Fire Brigade</a>
            <a href="#">Police</a>
            <a href="#">Ambulance</a>
    
        </div>
        </div>
    <a href="laws.html">Laws & Acts</a>
    <a href="gallery.html">Gallery</a>
    <a href="#">Contact Us</a>
</div>

<div class="container">
    <h2>About Us</h2>

    <!-- Section 1 -->
    <div class="section">
        <img src="image/civildefencelogo.png" alt="Civil Defence logo">
        <div class="section-text">
            <h2>Who We Are</h2>
            <p>
                Civil Defence Indore is a voluntary organization under Civil Defence Government of India dedicated to support the community during emergencies 
                and disasters. Our mission is to prepare individuals and communities to effectively respond to crises 
                such as natural calamities, industrial hazards, and war-like situations.Civil Defence measures are designed 
                to deal with immediate emergency conditions, protect the public and restore vital services and facilities that have been destroyed or damaged by disaster
            </p>
        </div>
    </div>

    <!-- Section 2 -->
    <div class="section">
        <img src="image/fire fighting.jpg" alt="Emergency Response Team">
        <div class="section-text">
            <h2>Our Mission</h2>
            <p>
                Our mission is to save lives, reduce suffering, and protect the environment during emergencies. 
                We provide specialized training to volunteers and assist local authorities in rescue operations, 
                disaster relief, and preparedness activities.
            </p>
        </div>
    </div>

    <!-- Section 3 -->
    <div class="section">
        <img src="image/mock drill.jpg" alt="Relief Work">
        <div class="section-text">
            <h2>What We Do</h2>
            <p>
                Civil Defence performs a wide range of activities, including:
            </p>
            <ul>
                <li>Organizing rescue and relief operations during emergencies</li>
                <li>Conducting community awareness and safety drills</li>
                <li>Training volunteers in disaster response techniques</li>
                <li>Collaborating with local authorities for effective disaster management</li>
            </ul>
        </div>
    </div>

    <!-- Section 4 -->
    <div class="section">
        <img src="image/exercise.jpg" alt="Community Safety Drill">
        <div class="section-text">
            <h2>Volunteer Engagement</h2>
            <p>
                Civil Defence emphasizes the importance of community participation. Our trained volunteers are 
                equipped to handle emergencies and play a pivotal role in creating a safer environment.Training
                Apart from carrying out training and rehearsal/ demonstration of Civil Defence measures during
                peacetime, Civil Defence volunteers are also deployed, voluntarily, in various constructive and 
                nation-building activities, which include assisting the administration in undertaking social and
                welfare services and in the prevention/mitigation of natural/man-made disasters as well as in
                post-disaster response and relief operations. Civil Defence training is conducted by the State
                Governments/UT Administrations in three tiers, i.e. at the Local/Town/district level, State level
                and National level. The training of master trainers and specialized training is conducted at the 
                National Civil Defence College, Nagpur and team/leadership training is conducted at State Civil 
                Defence Training Institutes. Training of the volunteers in the Civil Defence Organization is 
                conducted at local/town levels by trained trainers in the form of short-term training programs.
            </p>
        </div>
        
    </div>

    <!-----history-->
    <div class="section">
        <!-- <img src="image/exercise session.jpg" alt="Community Safety Drill"> -->
        <div class="section-text">
            <h2>History</h2>
            <p>
                Historically, The Civil Defence Policy of the Government of India, till the declaration of Emergency
                 in 1962, was confined to making the States and Union Territories conscious of the need of civil
                  protection measures and to ask them to keep ready civil protection paper plans for major cities and
                   towns under the then Emergency Relief Organization (ERO) Scheme. The Chinese aggression in 1962 and
                    the Indo- Pak conflict in 1965 led to a considerable re-thinking about the policy and scope of Civil Defence. The Civil Defence Act, 1968 (Act 27 of 1968) was passed by Parliament in May 1968. The Act extends to the whole of India and provides for among other things measures not amounting to actual combat, for affording protection to any person, property, place or thing in India or any part of the territory thereof against any hostile attack, whether from air, land, sea or other places, or for depriving any such attack of the whole or part of its effects, whether such measures are taken before, during, at or after the time of such attack. It also authorized the raising of Civil Defence Corps and for making Rules and Regulations for Civil Defence.
            </p>
        </div>
    </div>
</div>



<?php 
    require_once('./components/Footer.php');
?>


</body>

</html>