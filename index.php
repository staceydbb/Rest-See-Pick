<?php
include 'db.php'; 
$result = $conn->query("SELECT * FROM recipes");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RestSeePick - Home</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .header-bg-gradient {
            background: linear-gradient(to right, #ea580c, #dc2626);
        }
        .recipe-card {
            border-radius: 1.5rem;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.08);
            border: 1px solid #ffedd5;
            background-color: white;
        }
        .recipe-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 1rem 2.5rem rgba(0, 0, 0, 0.15);
        }
        .recipe-image-container {
            height: 14rem; 
            overflow: hidden;
            border-top-left-radius: 1.5rem;
            border-top-right-radius: 1.5rem;
        }
        .recipe-image {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
        .text-orange-700 { color: #c2410c; }
        .clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
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
                    <button type="button" data-bs-toggle="modal" data-bs-target="#addModal" class="btn btn-light text-danger px-4 py-2 rounded-pill fw-bold shadow-sm"> 
                        + Add New Recipe
                    </button>
                    <nav class="d-none d-md-flex gap-1">
                        <a href="index.php" class="nav-pill-custom active">Home</a>
                        <a href="about.html" class="nav-pill-custom">About Us</a>
                        <a href="contact.html" class="nav-pill-custom">Contact</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main class="py-5"> 
        <div class="container" style="max-width: 1300px;"> 
            <h2 class="h1 fw-bold text-center text-dark mb-2">Explore Flavors</h2> 
            <p class="text-center text-secondary mb-5">Be creative on your next dish!</p>

            <div class="row g-4"> 
                <?php while ($row = $result->fetch_assoc()) { 
                    $imgSrc = !empty($row['image_url']) ? $row['image_url'] : "https://via.placeholder.com/600x400"; 
                    $recipeData = array_map(function($value) { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }, $row);
                ?>
                    <div class="col-12 col-md-6 col-lg-4"> 
                        <div class="recipe-card h-100 d-flex flex-column"> 
                            <div class="position-relative recipe-image-container"> 
                                <img src="<?= $imgSrc ?>" alt="Recipe Image" class="recipe-image">
                                <span class="position-absolute top-0 end-0 mt-3 me-3 badge rounded-pill bg-danger shadow-sm"> 
                                    <?= $row['category'] ?>
                                </span>
                            </div>

                            <div class="p-4 d-flex flex-column flex-grow-1">
                                <h3 class="h4 fw-bold text-dark mb-1"><?= $row['title'] ?></h3>
                                <p class="small text-secondary mb-3 fst-italic">by <?= $row['chef'] ?></p> 
                                <p class="small text-body-secondary mb-4 clamp-3"><?= $row['description'] ?></p>

                                <div class="mt-auto pt-3 border-top"> 
                                    <div class="d-flex justify-content-around align-items-center mb-4 p-2 rounded-3 bg-warning-subtle border border-warning small">
                                        <span class="fw-bold text-orange-700">🕒 <?= $row['cook_time'] ?></span>
                                        <span class="fw-bold text-danger">🔥 <?= $row['calories'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2"> 
                                        <button type="button" class="edit-button btn btn-warning text-white fw-bold py-2 btn-sm flex-grow-1 rounded-3 shadow-sm"
                                            data-bs-toggle="modal" data-bs-target="#editModal"
                                            data-id="<?= $recipeData['id'] ?>"
                                            data-title="<?= $recipeData['title'] ?>"
                                            data-chef="<?= $recipeData['chef'] ?>"
                                            data-category="<?= $recipeData['category'] ?>"
                                            data-time="<?= $recipeData['cook_time'] ?>"
                                            data-calories="<?= $recipeData['calories'] ?>"
                                            data-image="<?= $recipeData['image_url'] ?>"
                                            data-description="<?= $recipeData['description'] ?>">Edit</button>
                                        
                                        <a href="delete.php?delete=<?= $row['id'] ?>" onclick="return confirm('Delete this recipe?')"
                                            class="btn btn-danger text-white fw-bold py-2 btn-sm flex-grow-1 rounded-3 shadow-sm text-center">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

    <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow" style="border-radius: 1.5rem;">
                <div class="modal-header border-0 p-4 pb-0">
                    <h5 class="fw-bold text-danger">Add New Recipe</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="add.php" method="POST">
                        <input type="text" name="title" placeholder="Recipe Title" class="form-control mb-3 bg-light" required>
                        <div class="row g-2 mb-3">
                            <div class="col-6"><input type="text" name="chef" placeholder="Chef" class="form-control bg-light" required></div>
                            <div class="col-6"><input type="text" name="category" placeholder="Category" class="form-control bg-light" required></div>
                        </div>
                        <div class="row g-2 mb-3">
                            <div class="col-6"><input type="text" name="time" placeholder="Time (e.g. 30m)" class="form-control bg-light" required></div>
                            <div class="col-6"><input type="text" name="calories" placeholder="Calories" class="form-control bg-light" required></div>
                        </div>
                        <input type="text" name="image_url" placeholder="Image URL" class="form-control mb-3 bg-light">
                        <textarea name="description" rows="3" placeholder="Description..." class="form-control mb-4 bg-light"></textarea>
                        <button type="submit" name="add_recipe" class="btn btn-danger w-100 fw-bold py-2 rounded-pill shadow-sm">Save Recipe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow" style="border-radius: 1.5rem;">
                <div class="modal-header border-0 p-4 pb-0">
                    <h5 class="fw-bold text-warning">Edit Recipe</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="update.php" method="POST">
                        <input type="hidden" name="edit_id" id="edit_id">
                        <div class="mb-3">
                            <label class="small fw-bold text-secondary">Title</label>
                            <input type="text" name="edit_title" id="edit_title" class="form-control bg-light" required>
                        </div>
                        <div class="row g-2 mb-3">
                            <div class="col-6">
                                <label class="small fw-bold text-secondary">Chef</label>
                                <input type="text" name="edit_chef" id="edit_chef" class="form-control bg-light" required>
                            </div>
                            <div class="col-6">
                                <label class="small fw-bold text-secondary">Category</label>
                                <input type="text" name="edit_category" id="edit_category" class="form-control bg-light" required>
                            </div>
                        </div>
                        <div class="row g-2 mb-3">
                            <div class="col-6">
                                <label class="small fw-bold text-secondary">Time</label>
                                <input type="text" name="edit_time" id="edit_time" class="form-control bg-light" required>
                            </div>
                            <div class="col-6">
                                <label class="small fw-bold text-secondary">Calories</label>
                                <input type="text" name="edit_calories" id="edit_calories" class="form-control bg-light" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="small fw-bold text-secondary">Image URL</label>
                            <input type="text" name="edit_image_url" id="edit_image_url" class="form-control bg-light">
                        </div>
                        <div class="mb-4">
                            <label class="small fw-bold text-secondary">Description</label>
                            <textarea name="edit_description" id="edit_description" rows="3" class="form-control bg-light"></textarea>
                        </div>
                        <button type="submit" name="update_recipe" class="btn btn-warning text-white w-100 fw-bold py-2 rounded-pill shadow-sm">Update Recipe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editModalElement = document.getElementById('editModal');
            editModalElement.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget; 
                const data = button.dataset; 
                
                document.getElementById("edit_id").value = data.id || '';
                document.getElementById("edit_title").value = data.title || '';
                document.getElementById("edit_chef").value = data.chef || '';
                document.getElementById("edit_category").value = data.category || '';
                document.getElementById("edit_time").value = data.time || '';
                document.getElementById("edit_calories").value = data.calories || '';
                document.getElementById("edit_image_url").value = data.image || '';
                document.getElementById("edit_description").value = data.description || '';
            });
        });
    </script>
</body>
</html>
