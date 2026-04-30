<!DOCTYPE html>
<html>
<head>
    <title>CI4 Student CRUD</title>
</head>
<body>
    <h2>Add Student</h2>
    <form method="post" action="<?= base_url('student/store') ?>">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="course" placeholder="Course" required>
        <button type="submit">Save</button>
    </form>

    <h2>Student List</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Action</th>
        </tr>
        <?php foreach($students as $user): ?>
        <tr>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['course'] ?></td>
            <td><a href="<?= base_url('student/delete/'.$user['id']) ?>">Delete</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>