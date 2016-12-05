<?php 	if($_SESSION["permissions"] == 1){
			$perm = "ADMIN";
		}
		else if($_SESSION["permissions"] == 2){
			$perm = "CM";
		}

		else{
			$perm = "GEN";
		}
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="homepage.php"><span class="glyphicon glyphicon-check" aria-hidden="true"></span>VotersChoice</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="homepage.php">Home</a></li>
      </ul>
      <form class="navbar-form navbar-left" action="profile.php" method="post">
        <input type="hidden" value= <?php echo '"' . $_SESSION["voterID"] . '"'; ?> name="id">
        <button type="submit">My Profile &nbsp <span class="badge"> <?php echo $perm; ?></span></button>
      </form>
      <?php if ($perm == "ADMIN"){ ?>
        <form class="navbar-form navbar-left" action="search.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search" name="search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      <?php } ?>
      <ul class="nav navbar-nav navbar-right">
        <?php if ($perm == "ADMIN" || $perm == "CM"){ ?>
          <li><a data-toggle="modal" href="#election-modal">Create Election&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|
        <?php } ?>
        <?php if($_SESSION["valid"] == 0){ ?>
          <li><a data-toggle="modal" href="#validate-account">Validate Account!&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|
        <?php } ?>
        <li><a href="logout.php">Log out</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Create Election Modal -->
<div id="election-modal" class="modal fade bd-example-modal-sm" role="dialogue">
    <div class="modal-dialogue">
        <div class="modal-content">
            <div class="myModal">
                <h1 class="modalTitle">Choose Number of Races</h1>
                <hr>
                <form action="../php/create_election.php" method="post">
                    <div class="form-group">
                        <input type="number" min="1" max="10" class="form-control thin" id="num_races" name="num_races">
                        <span>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Create Election Modal -->
<div id="validate-account" class="modal fade bd-example-modal-sm" role="dialogue">
    <div class="modal-dialogue">
        <div class="modal-content">
            <div class="myModal">
                <h1 class="modalTitle">Please input validation code!</h1>
                <hr>
                <form action="validate.php" method="post">
                    <div class="form-group">
                        <input type="number" min="0" max="9999" class="form-control thin" id="code" name="code">
                        <span>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </span>
                    </div>
                </form>

                <div>
                  <form action="resend.php" method="post">
                    <button type="submit" class="btn btn-primary">Send new code!</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>