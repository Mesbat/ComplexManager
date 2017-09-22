<div class="container-fluid" id="apps">
  <div class="container">
    <div class="panel panel-success">
      <div class="panel-heading">
        <div class="row">
          <div class="col-md-3">
            <h3 class="panel-title" style="padding: 2px;"><strong></strong></h3>
          </div>
          <div class="col-md-12">
            <div class="progress" style="margin-top: 10px;">
              <div id="bar" class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel-body">
        <div class="row">
          <form method="post" action="">
            <div class="col-md-4 col-md-offset-1 form-group">
              <div class="input-group">
                <span class="input-group-addon text-success">Re(z) : </span>
                <input type="text" id="rip" name="reel" class="form-control" id="Input1" aria-describedby="Input1" pattern="^[\+\-]{0,1}[0-9]?[\/]{0,1}[0-9]+$" required>
              </div>
            </div>
            <div class="col-md-4 col-md-offset-1 form-group">
              <div class="input-group">
                <span class="input-group-addon text-success">Im(z) : </span>
                <input type="text" id="rip"  name="imaginaire" class="form-control" id="Input2" aria-describedby="Input2" pattern="^[\+\-]{1}[0-9]?[\/]{0,1}[0-9]+$" required>
                <span class="input-group-addon text-success">i</span>
              </div>
            </div>
            <div class="col-md-2 form-group">
              <button type="submit" id="disablebutt" class="btn btn-raised btn-danger">Result</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="panel panel-danger">
      <div class="panel-heading">
        <div class="row">
          <div class="col-md-3">
            <h2 class="panel-title" style="padding: 2px;"><strong>Here is an Example!</strong></h2>
          </div>
          <div class="col-md-12">
          </div>
        </div>
      </div>
      <div class="panel-body">
        <div class="row">
            <div class="col-md-4 col-md-offset-2 form-group">
              <div class="input-group">
                <span class="input-group-addon text-danger">Re(z) : </span>
                <input type="text"value="6" class="form-control" disabled>
              </div>
            </div>
            <div class="col-md-4 col-md-offset-2 form-group">
              <div class="input-group">
                <span class="input-group-addon text-danger">Im(z) : </span>
                <input type="text" value="-2" class="form-control" disabled>
                <span class="input-group-addon text-danger">i</span>
              </div>
            </div>
            <div class="col-md-2 form-group">
              <button type="button" class="btn btn-raised btn-danger" data-toggle="modal" data-target="#simple-dialog">Result<div class="ripple-container"></div></button>
            </div>
        </div>
      </div>
    </div>
    <div class="well well-lg">
            <strong class="text text-danger">The first number is a real number (Re(z)) which is like :</strong><br> 
            <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Re(z) = 6 for z = <span class="text text-success">6</span> - 2i.<br/><br/>
            <strong class="text text-danger">The second number is an imaginary number (Im(z)) which is like :</strong><br> 
            <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Im(z) = -2i for z = 6<span class="text text-success"> - 2</span>i.
          </div>
  </div>
</div>
<div id="simple-dialog" class="modal fade" tabindex="-1" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="alert alert-dismissible alert-info">
            <strong>Results..<br></strong>
            This button is supposed to redirect you to the function's information page..
          </div>
    </div>
  </div>
</div>