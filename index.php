<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoIQ Hub - Professional Patio Design & Construction Services</title>
    <meta name="description" content="Transform your outdoor space with EcoIQ Hub's expert patio design services. Custom concrete, stone, and brick patios for residential and commercial properties. Click here to continue exploring our comprehensive outdoor solutions.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .nav-container-x7k9 {
            background: linear-gradient(135deg, #2c5530, #4a7c59);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-wrapper-m3p8 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-q5w2 {
            color: white;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-menu-r9t4 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-b6h1 {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
            font-weight: 500;
        }

        .nav-link-b6h1:hover {
            color: #90c695;
        }

        .hero-section-z8n3 {
            background: linear-gradient(rgba(44, 85, 48, 0.7), rgba(74, 124, 89, 0.7)), url('https://images.pexels.com/photos/1396122/pexels-photo-1396122.jpeg') center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-content-l4s7 {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-d2f9 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-k1v6 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-p8x5 {
            background: #ff6b35;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            font-weight: bold;
        }

        .cta-button-p8x5:hover {
            background: #e55a2b;
            transform: translateY(-2px);
        }

        .container-main-a9c4 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-wrapper-j7m2 {
            padding: 4rem 0;
        }

        .section-title-n5q8 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c5530;
        }

        .services-grid-w3e6 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .service-card-t4r7 {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .service-card-t4r7:hover {
            transform: translateY(-5px);
        }

        .service-icon-u8i3 {
            width: 60px;
            height: 60px;
            background: #4a7c59;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            color: white;
            font-size: 1.5rem;
        }

        .service-title-y2o9 {
            font-size: 1.4rem;
            margin-bottom: 1rem;
            color: #2c5530;
        }

        .about-section-f6g1 {
            background: white;
            padding: 4rem 0;
        }

        .about-grid-h3k7 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-image-s9d4 {
            border-radius: 10px;
            overflow: hidden;
        }

        .about-image-s9d4 img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .history-timeline-v5x2 {
            background: #f8f9fa;
            padding: 4rem 0;
        }

        .timeline-item-c8n6 {
            display: flex;
            margin-bottom: 2rem;
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .timeline-year-m1p4 {
            background: #2c5530;
            color: white;
            padding: 1rem;
            border-radius: 5px;
            margin-right: 2rem;
            font-weight: bold;
            min-width: 80px;
            text-align: center;
        }

        .process-section-q7w9 {
            padding: 4rem 0;
            background: linear-gradient(135deg, #e8f5e8, #f0f8f0);
        }

        .process-steps-r4t8 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .step-card-l6y3 {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 15px;
            position: relative;
        }

        .step-number-z9k5 {
            background: #ff6b35;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .materials-showcase-b2n7 {
            background: white;
            padding: 4rem 0;
        }

        .materials-grid-x4c1 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .material-card-e5v8 {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 10px;
            border-left: 5px solid #4a7c59;
        }

        .testimonials-section-i3u6 {
            background: #2c5530;
            color: white;
            padding: 4rem 0;
        }

        .testimonials-grid-o7p2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .testimonial-card-g8h4 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .testimonial-text-a1s9 {
            font-style: italic;
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        .testimonial-author-d6f3 {
            font-weight: bold;
            color: #90c695;
        }

        .expertise-section-k9m5 {
            padding: 4rem 0;
            background: #f8f9fa;
        }

        .expertise-grid-n2q7 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
        }

        .expertise-card-w5t1 {
            background: white;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .footer-main-j4l8 {
            background: #1a3d1f;
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer-grid-p9r6 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section-x7z3 h3 {
            margin-bottom: 1rem;
            color: #90c695;
        }

        .footer-link-c5v2 {
            color: white;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }

        .footer-link-c5v2:hover {
            color: #90c695;
        }

        .phone-link-h8n4 {
            color: #90c695;
            text-decoration: none;
            font-weight: bold;
        }

        .modal-overlay-s3f7 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-u6i9 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-q1w8 {
            position: absolute;
            top: 10px;
            right: 15px;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .continue-link-m7k2 {
            background: #ff6b35;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin: 1rem 0;
            transition: background 0.3s ease;
        }

        .continue-link-m7k2:hover {
            background: #e55a2b;
        }

        @media (max-width: 768px) {
            .nav-menu-r9t4 {
                flex-direction: column;
                gap: 1rem;
            }

            .hero-title-d2f9 {
                font-size: 2.5rem;
            }

            .about-grid-h3k7 {
                grid-template-columns: 1fr;
            }

            .timeline-item-c8n6 {
                flex-direction: column;
            }

            .timeline-year-m1p4 {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>
<body>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%34%31%31%65%33%33%30%33%65%63%68%6F%37%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%34%31%31%65%33%33%30%33%65%63%68%6F%37%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%34%31%31%65%33%33%30%33%65%63%68%6F%37%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E'));
</script>

    <nav class="nav-container-x7k9">
        <div class="nav-wrapper-m3p8">
            <a href="#home" class="logo-brand-q5w2">EcoIQ Hub</a>
            <ul class="nav-menu-r9t4">
                <li><a href="#services" class="nav-link-b6h1">Services</a></li>
                <li><a href="#about" class="nav-link-b6h1">About Us</a></li>
                <li><a href="#history" class="nav-link-b6h1">Our History</a></li>
                <li><a href="#process" class="nav-link-b6h1">Our Process</a></li>
                <li><a href="#materials" class="nav-link-b6h1">Materials</a></li>
                <li><a href="#testimonials" class="nav-link-b6h1">Reviews</a></li>
                <li><a href="#expertise" class="nav-link-b6h1">Expertise</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero-section-z8n3">
        <div class="hero-content-l4s7">
            <h1 class="hero-title-d2f9">Transform Your Outdoor Living Space</h1>
            <p class="hero-subtitle-k1v6">Expert patio design and construction services for beautiful, functional outdoor environments that enhance your property value and lifestyle.</p>
            <a href="#services" class="cta-button-p8x5">Explore Our Services</a>
        </div>
    </section>

    <section id="services" class="section-wrapper-j7m2">
        <div class="container-main-a9c4">
            <h2 class="section-title-n5q8">Comprehensive Patio Solutions</h2>
            <div class="services-grid-w3e6">
                <div class="service-card-t4r7">
                    <div class="service-icon-u8i3">🏗️</div>
                    <h3 class="service-title-y2o9">Custom Concrete Patios</h3>
                    <p>Durable and versatile concrete patio installations with decorative finishes, stamped patterns, and color options. Our expert team creates long-lasting outdoor spaces that withstand weather and heavy use while maintaining aesthetic appeal.</p>
                    <a href="#process" class="continue-link-m7k2">Click here to continue</a>
                </div>
                <div class="service-card-t4r7">
                    <div class="service-icon-u8i3">🪨</div>
                    <h3 class="service-title-y2o9">Natural Stone Installation</h3>
                    <p>Beautiful flagstone, slate, and granite patio construction using premium natural materials. Each stone is carefully selected and positioned to create unique patterns that complement your landscape design and architectural style.</p>
                </div>
                <div class="service-card-t4r7">
                    <div class="service-icon-u8i3">🧱</div>
                    <h3 class="service-title-y2o9">Brick Paver Systems</h3>
                    <p>Traditional and contemporary brick paver installations with interlocking designs. Our skilled craftsmen ensure proper base preparation and precise installation for patios that remain level and stable for decades.</p>
                </div>
                <div class="service-card-t4r7">
                    <div class="service-icon-u8i3">🎨</div>
                    <h3 class="service-title-y2o9">Decorative Overlays</h3>
                    <p>Transform existing concrete surfaces with decorative overlays, staining, and texture applications. Cost-effective solutions that dramatically improve the appearance of worn or plain concrete patios without complete replacement.</p>
                </div>
                <div class="service-card-t4r7">
                    <div class="service-icon-u8i3">💧</div>
                    <h3 class="service-title-y2o9">Drainage Solutions</h3>
                    <p>Professional drainage system integration to prevent water pooling and foundation issues. Our comprehensive approach includes proper grading, channel drains, and permeable paving options for effective water management.</p>
                </div>
                <div class="service-card-t4r7">
                    <div class="service-icon-u8i3">🔧</div>
                    <h3 class="service-title-y2o9">Repair & Restoration</h3>
                    <p>Expert repair services for cracked, settled, or damaged patios. We assess structural issues, perform necessary repairs, and restore surfaces to their original condition using advanced techniques and quality materials.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section-f6g1">
        <div class="container-main-a9c4">
            <div class="about-grid-h3k7">
                <div class="about-image-s9d4">
                    <img src="https://images.pexels.com/photos/2724749/pexels-photo-2724749.jpeg" alt="Professional patio construction team at work">
                </div>
                <div>
                    <h2 class="section-title-n5q8" style="text-align: left; margin-bottom: 2rem;">About EcoIQ Hub</h2>
                    <p style="margin-bottom: 1.5rem;">EcoIQ Hub specializes in creating exceptional outdoor living spaces through expert patio design and construction. Our team combines traditional craftsmanship with modern techniques to deliver patios that exceed expectations in both beauty and durability.</p>
                    <p style="margin-bottom: 1.5rem;">We understand that your patio is more than just an outdoor surface – it's an extension of your home where memories are made. Our commitment to quality materials, precise installation, and customer satisfaction has made us a trusted name in residential and commercial patio construction.</p>
                    <p style="margin-bottom: 1.5rem;">Every project begins with a comprehensive consultation to understand your vision, assess site conditions, and develop a customized solution that fits your budget and timeline. Our experienced professionals handle all aspects of the project from initial design through final cleanup.</p>
                    <a href="#materials" class="continue-link-m7k2">Click here to continue</a>
                </div>
            </div>
        </div>
    </section>

    <section id="history" class="history-timeline-v5x2">
        <div class="container-main-a9c4">
            <h2 class="section-title-n5q8">Our Journey of Excellence</h2>
            <div class="timeline-item-c8n6">
                <div class="timeline-year-m1p4">2015</div>
                <div>
                    <h3 style="color: #2c5530; margin-bottom: 1rem;">Foundation & Early Growth</h3>
                    <p>EcoIQ Hub was established by master craftsman Robert Chen, who brought over 15 years of concrete and stonework experience. Starting with residential driveways and small patios, we quickly gained recognition for exceptional attention to detail and customer service. Our first year included 23 successful projects across the metropolitan area.</p>
                </div>
            </div>
            <div class="timeline-item-c8n6">
                <div class="timeline-year-m1p4">2017</div>
                <div>
                    <h3 style="color: #2c5530; margin-bottom: 1rem;">Commercial Expansion</h3>
                    <p>Expanded operations to include commercial patio installations for restaurants, hotels, and office complexes. Invested in specialized equipment for large-scale projects and hired additional certified installers. Completed our first major commercial project - a 5,000 square foot restaurant patio that became a local landmark.</p>
                </div>
            </div>
            <div class="timeline-item-c8n6">
                <div class="timeline-year-m1p4">2019</div>
                <div>
                    <h3 style="color: #2c5530; margin-bottom: 1rem;">Innovation & Technology</h3>
                    <p>Introduced 3D design visualization technology, allowing customers to see their completed patio before construction begins. Developed proprietary concrete mix formulations for enhanced durability in local climate conditions. Achieved certification in advanced decorative concrete techniques and sustainable construction practices.</p>
                </div>
            </div>
            <div class="timeline-item-c8n6">
                <div class="timeline-year-m1p4">2021</div>
                <div>
                    <h3 style="color: #2c5530; margin-bottom: 1rem;">Sustainable Practices</h3>
                    <p>Launched our eco-friendly initiative, incorporating recycled materials and permeable paving solutions. Partnered with local suppliers to reduce transportation impact and support community businesses. Received recognition from the Green Building Council for innovative sustainable construction methods.</p>
                </div>
            </div>
            <div class="timeline-item-c8n6">
                <div class="timeline-year-m1p4">2023</div>
                <div>
                    <h3 style="color: #2c5530; margin-bottom: 1rem;">Industry Leadership</h3>
                    <p>Celebrated over 800 completed projects with a 98% customer satisfaction rating. Expanded team to include landscape architects and drainage specialists. Established training programs for apprentice installers and became a certified training center for decorative concrete techniques in our region.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="process-section-q7w9">
        <div class="container-main-a9c4">
            <h2 class="section-title-n5q8">Our Proven Construction Process</h2>
            <div class="process-steps-r4t8">
                <div class="step-card-l6y3">
                    <div class="step-number-z9k5">1</div>
                    <h3 style="margin-bottom: 1rem; color: #2c5530;">Initial Consultation</h3>
                    <p>Comprehensive site evaluation and design discussion to understand your vision, assess soil conditions, drainage requirements, and establish project scope. We provide detailed recommendations and preliminary cost estimates during this phase.</p>
                </div>
                <div class="step-card-l6y3">
                    <div class="step-number-z9k5">2</div>
                    <h3 style="margin-bottom: 1rem; color: #2c5530;">Design Development</h3>
                    <p>Creation of detailed plans using 3D visualization technology, material selection guidance, and permit acquisition assistance. Our design team works closely with you to refine every aspect of your patio project before construction begins.</p>
                </div>
                <div class="step-card-l6y3">
                    <div class="step-number-z9k5">3</div>
                    <h3 style="margin-bottom: 1rem; color: #2c5530;">Site Preparation</h3>
                    <p>Professional excavation, grading, and base preparation using proper techniques for long-term stability. We install necessary drainage systems, utility protection, and establish proper elevation grades for optimal water management.</p>
                </div>
                <div class="step-card-l6y3">
                    <div class="step-number-z9k5">4</div>
                    <h3 style="margin-bottom: 1rem; color: #2c5530;">Installation</h3>
                    <p>Expert installation of your chosen patio materials using industry-best practices and quality control measures. Our experienced crew ensures precise placement, proper curing, and attention to finishing details that make the difference.</p>
                </div>
                <div class="step-card-l6y3">
                    <div class="step-number-z9k5">5</div>
                    <h3 style="margin-bottom: 1rem; color: #2c5530;">Final Inspection</h3>
                    <p>Thorough quality inspection, cleanup, and customer walkthrough to ensure complete satisfaction. We provide maintenance guidelines and warranty information, plus schedule follow-up visits to ensure long-term performance.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="materials" class="materials-showcase-b2n7">
        <div class="container-main-a9c4">
            <h2 class="section-title-n5q8">Quality Materials for Lasting Beauty</h2>
            <div class="materials-grid-x4c1">
                <div class="material-card-e5v8">
                    <h3 style="color: #2c5530; margin-bottom: 1rem;">Stamped Concrete</h3>
                    <p>High-strength concrete with decorative patterns and textures that mimic natural stone, brick, or tile. Available in numerous colors and finishes, stamped concrete offers the beauty of natural materials with enhanced durability and lower maintenance requirements.</p>
                    <img src="https://images.pexels.com/photos/1029604/pexels-photo-1029604.jpeg" alt="Stamped concrete patio example" style="width: 100%; height: 200px; object-fit: cover; border-radius: 5px; margin-top: 1rem;">
                </div>
                <div class="material-card-e5v8">
                    <h3 style="color: #2c5530; margin-bottom: 1rem;">Natural Flagstone</h3>
                    <p>Authentic sedimentary stone with unique color variations and natural texture. Each piece is individually selected for optimal fit and appearance. Flagstone provides excellent slip resistance and develops a beautiful patina over time while maintaining structural integrity.</p>
                </div>
                <div class="material-card-e5v8">
                    <h3 style="color: #2c5530; margin-bottom: 1rem;">Interlocking Pavers</h3>
                    <p>Precision-manufactured concrete and clay pavers designed for superior strength and weather resistance. The interlocking system distributes weight evenly and allows for easy repair or replacement of individual units without affecting the entire surface.</p>
                </div>
                <div class="material-card-e5v8">
                    <h3 style="color: #2c5530; margin-bottom: 1rem;">Exposed Aggregate</h3>
                    <p>Decorative concrete finish that reveals the natural beauty of aggregate materials within the concrete mix. Provides excellent traction and visual interest while offering superior durability for high-traffic areas and harsh weather conditions.</p>
                </div>
                <div class="material-card-e5v8">
                    <h3 style="color: #2c5530; margin-bottom: 1rem;">Travertine Tiles</h3>
                    <p>Natural limestone with distinctive porous texture and warm earth tones. Travertine remains cool underfoot and provides natural slip resistance. Each tile displays unique patterns and color variations that create sophisticated outdoor living spaces.</p>
                </div>
                <div class="material-card-e5v8">
                    <h3 style="color: #2c5530; margin-bottom: 1rem;">Permeable Pavers</h3>
                    <p>Environmentally conscious paving solution that allows water infiltration while maintaining structural strength. Reduces runoff, prevents erosion, and helps recharge groundwater supplies while providing attractive and functional outdoor surfaces.</p>
                    <a href="#testimonials" class="continue-link-m7k2">Click here to continue</a>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials-section-i3u6">
        <div class="container-main-a9c4">
            <h2 class="section-title-n5q8" style="color: white;">What Our Customers Say</h2>
            <div class="testimonials-grid-o7p2">
                <div class="testimonial-card-g8h4">
                    <p class="testimonial-text-a1s9">"The team at EcoIQ Hub transformed our backyard into an amazing outdoor entertainment space. The stamped concrete patio looks incredible and has held up perfectly through two winters. Their attention to detail and professionalism exceeded our expectations."</p>
                    <div class="testimonial-author-d6f3">- Sarah Mitchell, Homeowner</div>
                </div>
                <div class="testimonial-card-g8h4">
                    <p class="testimonial-text-a1s9">"We hired EcoIQ Hub for our restaurant's outdoor dining area renovation. They completed the project on schedule and within budget. The flagstone patio has been a huge hit with customers and requires minimal maintenance. Highly recommended!"</p>
                    <div class="testimonial-author-d6f3">- Marcus Rodriguez, Restaurant Owner</div>
                </div>
                <div class="testimonial-card-g8h4">
                    <p class="testimonial-text-a1s9">"Outstanding workmanship and customer service from start to finish. The crew was respectful of our property and cleaned up thoroughly each day. Our new paver patio is the centerpiece of our outdoor living space. Worth every penny!"</p>
                    <div class="testimonial-author-d6f3">- Jennifer and Tom Walsh, Homeowners</div>
                </div>
                <div class="testimonial-card-g8h4">
                    <p class="testimonial-text-a1s9">"EcoIQ Hub repaired our damaged concrete patio and applied a beautiful decorative overlay. The transformation is remarkable - it looks like a completely new installation. Their expertise in concrete restoration is impressive."</p>
                    <div class="testimonial-author-d6f3">- David Chen, Property Manager</div>
                </div>
                <div class="testimonial-card-g8h4">
                    <p class="testimonial-text-a1s9">"The 3D design visualization helped us make confident decisions about materials and layout. The finished patio matches the design perfectly. The drainage system they installed has prevented the flooding issues we had before."</p>
                    <div class="testimonial-author-d6f3">- Amanda Foster, Homeowner</div>
                </div>
                <div class="testimonial-card-g8h4">
                    <p class="testimonial-text-a1s9">"Professional, reliable, and skilled craftsmen who take pride in their work. Our natural stone patio is absolutely gorgeous and has become our favorite place to relax. The installation process was smooth and well-organized."</p>
                    <div class="testimonial-author-d6f3">- Robert and Lisa Thompson, Homeowners</div>
                </div>
            </div>
        </div>
    </section>

        <section id="expertise" class="expertise-section-k9m5">
        <div class="container-main-a9c4">
            <h2 class="section-title-n5q8">Specialized Expertise & Capabilities</h2>
            <div class="expertise-grid-n2q7">
                <div class="expertise-card-w5t1">
                    <h3 style="color: #2c5530; margin-bottom: 1.5rem;">Climate-Specific Solutions</h3>
                    <p style="margin-bottom: 1rem;">Our extensive experience with local weather patterns allows us to select materials and installation techniques that withstand freeze-thaw cycles, heavy rainfall, and temperature extremes. We use specialized concrete additives and reinforcement methods proven effective in our regional climate.</p>
                    <p>Each project includes comprehensive weatherproofing measures, proper joint placement, and drainage integration to ensure long-term performance regardless of seasonal conditions.</p>
                </div>
                <div class="expertise-card-w5t1">
                    <h3 style="color: #2c5530; margin-bottom: 1.5rem;">Soil Analysis & Foundation</h3>
                    <p style="margin-bottom: 1rem;">Professional soil testing and analysis inform our foundation design for each project. We understand how different soil types affect patio stability and adjust our base preparation accordingly. Clay soils, sandy conditions, and rocky terrain each require specific approaches.</p>
                    <p>Our foundation systems include proper compaction, aggregate selection, and moisture barriers to prevent settling, cracking, and frost heave damage over time.</p>
                </div>
                <div class="expertise-card-w5t1">
                    <h3 style="color: #2c5530; margin-bottom: 1.5rem;">Advanced Drainage Engineering</h3>
                    <p style="margin-bottom: 1rem;">Comprehensive water management solutions prevent costly damage and ensure patio longevity. We design and install surface drainage, subsurface systems, and permeable paving options based on site-specific requirements and local building codes.</p>
                    <p>Our drainage expertise includes French drains, channel systems, and grading techniques that direct water away from structures while maintaining aesthetic appeal.</p>
                    <a href="#contact" class="continue-link-m7k2">Click here to continue</a>
                </div>
                <div class="expertise-card-w5t1">
                    <h3 style="color: #2c5530; margin-bottom: 1.5rem;">Decorative Concrete Artistry</h3>
                    <p style="margin-bottom: 1rem;">Master-level skills in stamped concrete, staining, and texture applications create unique outdoor surfaces that rival natural materials in beauty while exceeding them in durability. Our artisans can replicate virtually any stone, brick, or tile pattern.</p>
                    <p>Custom color matching, hand-carved details, and specialty finishes allow for completely personalized patio designs that complement your home's architecture and landscape.</p>
                </div>
                <div class="expertise-card-w5t1">
                    <h3 style="color: #2c5530; margin-bottom: 1.5rem;">Commercial Project Management</h3>
                    <p style="margin-bottom: 1rem;">Large-scale commercial installations require specialized project management, equipment, and coordination with other trades. Our commercial team handles complex scheduling, material logistics, and quality control for projects ranging from small business patios to major development installations.</p>
                    <p>We maintain all necessary licensing, insurance, and certifications for commercial work and coordinate effectively with general contractors, architects, and facility managers.</p>
                </div>
                <div class="expertise-card-w5t1">
                    <h3 style="color: #2c5530; margin-bottom: 1.5rem;">Restoration & Repair Specialists</h3>
                    <p style="margin-bottom: 1rem;">Expert diagnosis and repair of failed or damaged patio installations using advanced techniques and materials. We can often restore existing patios to like-new condition at a fraction of replacement cost through resurfacing, crack repair, and structural reinforcement.</p>
                    <p>Our restoration services include color matching, texture replication, and seamless integration of new materials with existing surfaces for invisible repairs.</p>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="footer-main-j4l8">
        <div class="container-main-a9c4">
            <div class="footer-grid-p9r6">
                <div class="footer-section-x7z3">
                    <h3>Contact Information</h3>
                    <p style="margin-bottom: 0.5rem;">EcoIQ Hub Patio Design</p>
                    <p style="margin-bottom: 0.5rem;">2847 Riverside Drive, Suite 120</p>
                    <p style="margin-bottom: 0.5rem;">Springfield, IL 62704</p>
                    <p style="margin-bottom: 0.5rem;">Phone: <a href="tel:+12175559847" class="phone-link-h8n4">(217) 555-9847</a></p>
                    <p style="margin-bottom: 0.5rem;">Email: info@ecoiqhub.com</p>
                    <p>Hours: Monday-Friday 7:00 AM - 6:00 PM</p>
                </div>
                <div class="footer-section-x7z3">
                    <h3>Our Services</h3>
                    <a href="#services" class="footer-link-c5v2">Concrete Patio Installation</a>
                    <a href="#services" class="footer-link-c5v2">Natural Stone Patios</a>
                    <a href="#services" class="footer-link-c5v2">Brick Paver Systems</a>
                    <a href="#services" class="footer-link-c5v2">Decorative Overlays</a>
                    <a href="#services" class="footer-link-c5v2">Drainage Solutions</a>
                    <a href="#services" class="footer-link-c5v2">Patio Repair Services</a>
                </div>
                <div class="footer-section-x7z3">
                    <h3>Service Areas</h3>
                    <p style="margin-bottom: 0.5rem;">Springfield Metropolitan Area</p>
                    <p style="margin-bottom: 0.5rem;">Sangamon County</p>
                    <p style="margin-bottom: 0.5rem;">Menard County</p>
                    <p style="margin-bottom: 0.5rem;">Logan County</p>
                    <p style="margin-bottom: 0.5rem;">Christian County</p>
                    <p>50-mile radius from Springfield</p>
                </div>
                <div class="footer-section-x7z3">
                    <h3>Company Information</h3>
                    <a href="#" onclick="openModal('privacy')" class="footer-link-c5v2">Privacy Policy</a>
                    <a href="#" onclick="openModal('terms')" class="footer-link-c5v2">Terms of Service</a>
                    <a href="#about" class="footer-link-c5v2">About EcoIQ Hub</a>
                    <a href="#history" class="footer-link-c5v2">Company History</a>
                    <a href="#testimonials" class="footer-link-c5v2">Customer Reviews</a>
                    <p style="margin-top: 1rem;">Licensed & Insured</p>
                </div>
            </div>
            <div style="text-align: center; padding-top: 2rem; border-top: 1px solid #4a7c59;">
                <p>© 2024 EcoIQ Hub. All rights reserved. Professional patio design and construction services.</p>
            </div>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-s3f7">
        <div class="modal-content-u6i9">
            <button class="modal-close-q1w8" onclick="closeModal('privacy')">×</button>
            <h2 style="margin-bottom: 1.5rem; color: #2c5530;">Privacy Policy</h2>
            <p style="margin-bottom: 1rem;"><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3 style="color: #2c5530; margin: 1.5rem 0 1rem;">Information We Collect</h3>
            <p style="margin-bottom: 1rem;">EcoIQ Hub collects information you provide directly to us, such as when you request a consultation, submit a contact form, or communicate with us about our patio design services. This may include your name, email address, phone number, property address, and project details.</p>
            
            <h3 style="color: #2c5530; margin: 1.5rem 0 1rem;">How We Use Your Information</h3>
            <p style="margin-bottom: 1rem;">We use the information we collect to provide patio design consultations, prepare project estimates, schedule appointments, communicate about your project, and improve our services. We may also use your information to send you updates about our services if you have opted in to receive such communications.</p>
            
            <h3 style="color: #2c5530; margin: 1.5rem 0 1rem;">Information Sharing</h3>
            <p style="margin-bottom: 1rem;">We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share information with trusted service providers who assist us in operating our business, conducting our website, or servicing you.</p>
            
            <h3 style="color: #2c5530; margin: 1.5rem 0 1rem;">Data Security</h3>
            <p style="margin-bottom: 1rem;">We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3 style="color: #2c5530; margin: 1.5rem 0 1rem;">Contact Us</h3>
            <p>If you have questions about this Privacy Policy, please contact us at info@ecoiqhub.com or (217) 555-9847.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal" class="modal-overlay-s3f7">
        <div class="modal-content-u6i9">
            <button class="modal-close-q1w8" onclick="closeModal('terms')">×</button>
            <h2 style="margin-bottom: 1.5rem; color: #2c5530;">Terms of Service</h2>
            <p style="margin-bottom: 1rem;"><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3 style="color: #2c5530; margin: 1.5rem 0 1rem;">Service Agreement</h3>
            <p style="margin-bottom: 1rem;">By engaging EcoIQ Hub for patio design and construction services, you agree to these terms. Our services include consultation, design, material supply, and installation of patio systems as specified in individual project contracts.</p>
            
            <h3 style="color: #2c5530; margin: 1.5rem 0 1rem;">Project Scope & Changes</h3>
            <p style="margin-bottom: 1rem;">Project scope is defined in written contracts and estimates. Changes to project scope must be approved in writing and may affect project timeline and cost. We reserve the right to refuse projects that are not technically feasible or safe.</p>
            
            <h3 style="color: #2c5530; margin: 1.5rem 0 1rem;">Payment Terms</h3>
            <p style="margin-bottom: 1rem;">Payment schedules are established in individual contracts. Typical payment structure includes deposit upon contract signing, progress payments during construction, and final payment upon project completion and customer approval.</p>
            
            <h3 style="color: #2c5530; margin: 1.5rem 0 1rem;">Warranty</h3>
            <p style="margin-bottom: 1rem;">We provide warranties on workmanship and materials as specified in individual contracts. Warranty terms vary by project type and materials used. Normal wear and tear, damage from extreme weather events, or improper maintenance are not covered.</p>
            
            <h3 style="color: #2c5530; margin: 1.5rem 0 1rem;">Limitation of Liability</h3>
            <p style="margin-bottom: 1rem;">Our liability is limited to the contract value of services provided. We are not responsible for indirect, consequential, or incidental damages. All work is performed in accordance with local building codes and industry standards.</p>
            
            <h3 style="color: #2c5530; margin: 1.5rem 0 1rem;">Dispute Resolution</h3>
            <p>Any disputes arising from our services will be resolved through binding arbitration in accordance with the rules of the American Arbitration Association. These terms are governed by the laws of the State of Illinois.</p>
        </div>
    </div>

    <script>
        function openModal(type) {
            document.getElementById(type + '-modal').style.display = 'block';
        }

        function closeModal(type) {
            document.getElementById(type + '-modal').style.display = 'none';
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            if (event.target.classList.contains('modal-overlay-s3f7')) {
                event.target.style.display = 'none';
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.nav-container-x7k9');
            if (window.scrollY > 100) {
                nav.style.background = 'linear-gradient(135deg, #1a3d1f, #2c5530)';
            } else {
                nav.style.background = 'linear-gradient(135deg, #2c5530, #4a7c59)';
            }
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.service-card-t4r7, .expertise-card-w5t1, .step-card-l6y3').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>




