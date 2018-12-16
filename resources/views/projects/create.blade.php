<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>CreateProject</h1>
    <form method="post" action="/projects">
        {{csrf_field()}}
        <div>
            <input type="text" name="title" placeholder="Project tittle">
        </div>
        <div>
            <textarea name="description" placeholder="Project description"></textarea>
        </div>
        <div>
           <button type="submit">Create Project</button>
        </div>
    </form>
</body>
</html>