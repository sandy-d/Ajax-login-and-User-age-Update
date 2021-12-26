<?php if(!defined("APP_NAME")) exit(); ?>
<?php $user = auth_user(); if($user === null) exit(); ?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo APP_NAME; ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <h3>Welcome, <?php echo $user["name"]; ?></h3>
            <br />
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">Dashboard <span class="sr-only">(current)</span></a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
             <?php if(isset($_GET['up'])){ ?>
          <h1> <?php echo $_GET['up'];?></h1>
        </div>
        <?php } ?>
            <form id="fupForm" name="form1" method="post" action="action.php">
            <label for="name">Age: </label>
            <input type="hidden" name="user" value="<?php echo $user['name']?>">
            <input type="text" id="age" name="age" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" minlength="1" maxlength="2">
            <input type='submit' name=control  style='color:blue;font-size:17px;border:none' class="submit">
            </form>
        </div>
    </div>
</div>
