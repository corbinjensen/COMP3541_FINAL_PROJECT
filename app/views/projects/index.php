<h1>Projects</h1>

<form method="GET" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="hidden" name="url" value="projects/index">
    
    <label for="category_id">Filter by Category:</label>
    <select name="category_id" onchange="this.form.submit()">
        <option value="">-- All Categories --</option>
        <?php foreach ($categories as $cat): ?>
            <option value="<?php echo $cat->id; ?>" 
                <?php if (isset($_GET['category_id']) && $_GET['category_id'] == $cat->id) echo 'selected'; ?>>
                <?php echo htmlspecialchars($cat->name); ?>
            </option>
        <?php endforeach; ?>
    </select>
</form>


<br>
<?php if (!empty($selectedCategoryName)): ?>
    <h2>Category: <?php echo htmlspecialchars($selectedCategoryName); ?></h2>
<?php endif; ?>
<br>

<?php if (!empty($projects)) : ?>
    <ul>
        <?php foreach ($projects as $project): ?>
            <li style="margin-bottom: 2rem;">
                <?php if (!empty($project->image)): ?>
                    <?php if (filter_var($project->image, FILTER_VALIDATE_URL)) : ?>
                        <!-- External image URL -->
                        <img src="<?php echo $project->image; ?>" 
                             alt="<?php echo htmlspecialchars($project->title); ?>" 
                             style="max-width: 300px; height: auto;">
                    <?php else: ?>
                        <!-- Local image from /public/uploads/ -->
                        <img src="<?php echo URLROOT . '/public/uploads/' . htmlspecialchars($project->image); ?>" 
                             alt="<?php echo htmlspecialchars($project->title); ?>" 
                             style="max-width: 300px; height: auto;">
                    <?php endif; ?>
                <?php endif; ?>

                <h3><?php echo htmlspecialchars($project->title); ?></h3>
                <p><?php echo nl2br(htmlspecialchars($project->description)); ?></p>

                <?php if (!empty($project->category_name)): ?>
                    <p><strong>Category:</strong> <?php echo htmlspecialchars($project->category_name); ?></p>
                <?php endif; ?>

                <p><strong>Tech Stack:</strong> <?php echo htmlspecialchars($project->tech_stack); ?></p>
                <p><a href="?url=projects/view/<?php echo $project->id; ?>">View Details</a></p>
                <hr>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No projects found.</p>
<?php endif; ?>
