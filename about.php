<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RestSeePick - About Us</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .header-bg-gradient { background: linear-gradient(to right, #ea580c, #dc2626); }
        
        .team-card { 
            border-radius: 1.5rem; 
            border: 1px solid #ffedd5; 
            transition: 0.3s; 
            background: white;
            overflow: hidden;
        }
        .team-card:hover { 
            transform: translateY(-8px); 
            box-shadow: 0 1rem 2.5rem rgba(0,0,0,0.15); 
        }

        .member-photo {
            width: 120px;
            height: 120px;
            object-fit: cover; 
            border-radius: 50%; 
            border: 4px solid #fff3e0;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .nav-pill-custom {
            color: white; text-decoration: none; font-weight: 500; padding: 6px 15px;
            border-radius: 50px; transition: 0.3s; opacity: 0.8; font-size: 0.95rem;
        }
        .nav-pill-custom:hover { opacity: 1; background: rgba(255, 255, 255, 0.15); }
        .nav-pill-custom.active { background: white; color: #dc2626 !important; opacity: 1; }
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
                    <div style="height: 38px;"></div> <nav class="d-flex gap-1">
                        <a href="index.php" class="nav-pill-custom">Home</a>
                        <a href="about.php" class="nav-pill-custom active">About Us</a>
                        <a href="contact.php" class="nav-pill-custom">Contact</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main class="container py-5 mt-4" style="max-width: 1300px;">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-dark">Meet Our Team</h2>
            <p class="text-secondary fs-5">The four minds behind RestSeePick.</p>
        </div>

        <div class="row g-4 justify-content-center">
            
            <div class="col-md-3">
                <div class="card team-card p-4 text-center shadow-sm h-100">
                    <img src="images/member1.jpg" alt="Member Name" class="member-photo mx-auto">
                    <h4 class="fw-bold mb-1 text-dark">Marco Elias H. Abad</h4>
                    <p class="text-secondary fw-medium">Project Leader</p>
                    <p class="small text-muted">Handles the core architecture and database connection.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card team-card p-4 text-center shadow-sm h-100">
                    <img src="images/member2.jpg" alt="Member Name" class="member-photo mx-auto">
                    <h4 class="fw-bold mb-1 text-dark">Jemimah Keziah S. Asa</h4>
                    <p class="text-secondary fw-medium">UI/UX Designer</p>
                    <p class="small text-muted">Responsible for the orange gradient theme and Bootstrap layout.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card team-card p-4 text-center shadow-sm h-100">
                    <img src="images/member3.jpg" alt="Member Name" class="member-photo mx-auto">
                    <h4 class="fw-bold mb-1 text-dark">Stacey D. Ballares</h4>
                    <p class="text-secondary fw-medium">Frontend Developer</p>
                    <p class="small text-muted">Created the responsive recipe grid and navigation system.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card team-card p-4 text-center shadow-sm h-100">
                    <img src="images/member4.jpg" alt="Member Name" class="member-photo mx-auto">
                    <h4 class="fw-bold mb-1 text-dark">Louise Javier D. Calaquian</h4>
                    <p class="text-secondary fw-medium">Backend Developer</p>
                    <p class="small text-muted">Managed the PHP logic for adding, editing, and deleting recipes.</p>
                </div>
            </div>

        </div>
    </main>
</body>
</html>
