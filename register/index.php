<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volunteer Registration</title>
    <?php include '../anchor.php'; ?>
</head>
<body>
    <div class="container-padding section-padding interactive-bg">
        <h1 class="text-reveal">Volunteer Registration Form</h1>
        <form action="register.php" method="POST" enctype="multipart/form-data" class="mt-6">
            <!-- Volunteer Details -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" id="name" name="name" required class="w-full px-3 py-2 border border-gray-300 rounded-md">
            </div>
            <!-- Add other fields similarly: mobile, father's name, blood group, Aadhaar number, etc. -->
            <div class="mb-4">
                <label for="photo" class="block text-gray-700 text-sm font-bold mb-2">Passport Photo:</label>
                <input type="file" id="photo" name="photo" accept="image/*" required class="w-full px-3 py-2 border border-gray-300 rounded-md">
            </div>
            <!-- Submit Button -->
            <button type="submit" name="submit" class="bg-primary hover:bg-primary-light text-white px-6 py-2 rounded-md">Submit</button>
        </form>
    </div>
</body>
</html>