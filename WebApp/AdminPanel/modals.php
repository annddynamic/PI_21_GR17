<!--Modals-->

<!--Add User-->
<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add User</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Last Nme">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="form-group">

                        <label for="Gender">Gender</label>
                        <select class="form-control" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="Date">Date</label>
                        <input type="date" class="form-control" name="date">
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="City">
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" placeholder="Country">
                    </div>
                    <div class="form-group">
                        <label>ZIP</label>
                        <input type="number" class="form-control" placeholder="ZIP">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="Gender">Role</label>
                        <select class="form-control" name="role">
                            <option value="admin">Admin</option>
                            <option value="police">Police</option>
                            <option value="citizen">Citizen</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add User</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--        ReviewRequestModal-->

<div class="modal fade" id="reviewReq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add User</h4>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li  class="sticky list-group-item active main-color-bg">
                        Pending Approval
                    </li>
                    <li class="list-group-item">
                        Dapibus ac facilisis in
                        <button type="button" class="pull-right btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                        <button type="button" style="margin-left:22em;" class=" btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                        </button>
                    </li>
                    <li class="list-group-item">
                        Dapibus ac facilisis in
                        <button type="button" class="pull-right btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                        <button type="button" style="margin-left:22em;" class=" btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                        </button>
                    </li>
                    <li class="list-group-item">
                        Dapibus ac facilisis in
                        <button type="button" class="pull-right btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                        <button type="button" style="margin-left:22em;" class=" btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                        </button>
                    </li>
                    <li class="list-group-item">
                        Dapibus ac facilisis in
                        <button type="button" class="pull-right btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                        <button type="button" style="margin-left:22em;" class=" btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                        </button>
                    </li>
                    <li class="list-group-item">
                        Dapibus ac facilisis in
                        <button type="button" class="pull-right btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                        <button type="button" style="margin-left:22em;" class=" btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add User</button>
            </div>
        </div>
    </div>
</div>

<!--    editUser modal-->
<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit User</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Last Nme">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="form-group">

                        <label for="Gender">Gender</label>
                        <select class="form-control" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="City">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add User</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--        deleteUser Modal-->

<div class="modal fade"  style="margin-top: 10em" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="delete">
                    <h3>
                        Are you sure you want to delete this user?
                        <br>
                        Changes cannot be undone!
                    </h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- approveUser Modal -->

<div class="modal fade"  style="margin-top: 10em" id="approveUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="delete">
                    <h3>
                        Are you sure you want to proceed?
                        <br>
                        Changes cannot be undone!
                    </h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>