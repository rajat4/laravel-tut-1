<h1>Add Members</h1>
<form action="" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter name"> <br> <br>
    <input type="text" name="email" placeholder="Enter email"> <br> <br>
    <input type="text" name="address" placeholder="Enter address"> <br> <br>
    <button type="submit">Add Member</button>

    </form>