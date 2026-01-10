<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RestSeePick - Contact Us</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .header-bg-gradient {
            background: linear-gradient(to right, #ea580c, #dc2626);
        }
        .nav-pill-custom {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 6px 15px;
            border-radius: 50px;
            transition: 0.3s;
            opacity: 0.8;
            font-size: 0.95rem;
        }
        .nav-pill-custom:hover {
            opacity: 1;
            background: rgba(255, 255, 255, 0.15);
        }
        .nav-pill-custom.active {
            background: white;
            color: #dc2626 !important;
            opacity: 1;
        }
        .contact-card {
            background: white;
            border-radius: 1.5rem;
            border: 1px solid #ffedd5;
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.08);
        }
        .form-control:focus {
            border-color: #ea580c;
            box-shadow: 0 0 0 0.25rem rgba(234, 88, 12, 0.25);
        }
    </style>
</head>
<body class="bg-warning-subtle">

    <header class="header-bg-gradient text-white py-3 shadow sticky-top">
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between align-items-center mx-auto" style="max-width: 1300px;">
                
                <div class="d-flex flex-column">
                    <h1 class="display-4 fw-bold mb-0">RestSeePick</h1>
                    <p class="small fst-italic mt-n1 mb-0 opacity-75">Preparing meals made easier</p>
                </div>

                <div class="d-flex flex-column align-items-end gap-2">
                    <div style="height: 48px;"></div> 

                    <nav class="d-flex gap-1">
                        <a href="index.php" class="nav-pill-custom">Home</a>
                        <a href="about.php" class="nav-pill-custom">About Us</a>
                        <a href="contact.php" class="nav-pill-custom active">Contact</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main class="container py-5 mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="contact-card p-5 shadow-sm">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold text-dark text-center">Get in Touch</h2>
                        <p class="text-secondary text-center">Have feedback or a recipe to share? We'd love to hear from you.</p>
                    </div>

                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label class="form-label small fw-bold text-secondary text-uppercase">Full Name</label>
                            <input type="text" class="form-control bg-light border-0 py-2 rounded-3" placeholder="John Doe" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-secondary text-uppercase">Email Address</label>
                            <input type="email" class="form-control bg-light border-0 py-2 rounded-3" placeholder="name@example.com" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-secondary text-uppercase">Subject</label>
                            <select class="form-select bg-light border-0 py-2 rounded-3">
                                <option selected>General Inquiry</option>
                                <option>Recipe Suggestion</option>
                                <option>Technical Issue</option>
                                <option>Feedback</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label small fw-bold text-secondary text-uppercase">Message</label>
                            <textarea class="form-control bg-light border-0 py-2 rounded-3" rows="5" placeholder="Write your message here..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-danger w-100 fw-bold py-3 rounded-pill shadow-sm">
                            Send Message
                        </button>
                    </form>
                </div>

                <div class="text-center mt-5 text-secondary small">
                    <p>&copy; 2025 RestSeePick Group Project. All rights reserved.</p>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
