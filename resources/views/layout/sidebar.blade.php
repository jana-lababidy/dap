<div class="collapse navbar-collapse flex-column" id="navbar-collapse">
          <ul class="navbar-nav d-lg-block">

            <li class="nav-item">

              <a class="nav-link" href="index.html">Overview</a>

            </li>

            <li class="nav-item">

              <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2">Pages</a>
              <div id="submenu-2" class="collapse">
                <ul class="nav nav-small flex-column">

                  <li class="nav-item">
                    <a class="nav-link" href="pages-app.html">App Pages</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="pages-utility.html">Utility Pages</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="pages-layouts.html">Layouts</a>
                  </li>

                </ul>
              </div>

            </li>

            <li class="nav-item">

              <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3">Components</a>
              <div id="submenu-3" class="collapse">
                <ul class="nav nav-small flex-column">

                  <li class="nav-item">
                    <a class="nav-link" href="components-bootstrap.html">Bootstrap</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="components-pipeline.html">Pipeline</a>
                  </li>

                </ul>
              </div>

            </li>

            <li class="nav-item">

              <a class="nav-link" href="documentation/index.html">Documentation</a>

            </li>

            <li class="nav-item">

              <a class="nav-link" href="documentation/changelog.html">Changelog</a>

            </li>

          </ul>
          <hr>
          <div class="d-none d-lg-block w-100">
            <span class="text-small text-muted">Quick Links</span>
            <ul class="nav nav-small flex-column mt-2">
              <li class="nav-item">
                <a href="nav-side-team.html" class="nav-link">Team Overview</a>
              </li>
              <li class="nav-item">
                <a href="nav-side-project.html" class="nav-link">Project</a>
              </li>
              <li class="nav-item">
                <a href="nav-side-task.html" class="nav-link">Single Task</a>
              </li>
              <li class="nav-item">
                <a href="nav-side-kanban-board.html" class="nav-link">Kanban Board</a>
              </li>
            </ul>
            <hr>
          </div>
          <div>
            <form>
              <div class="input-group input-group-dark input-group-round">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">search</i>
                  </span>
                </div>
                <input type="search" class="form-control form-control-dark" placeholder="Search" aria-label="Search app">
              </div>
            </form>
            <div class="dropdown mt-2">
              <button class="btn btn-primary btn-block dropdown-toggle" type="button" id="newContentButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Add New
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Team</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#add-project">Project</a>
                <a class="dropdown-item" href="#">Task</a>
              </div>
            </div>
          </div>
        </div>
        <div class="d-none d-lg-block">
          <div class="dropup">
            <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img alt="Image" src="{{asset('avatar/'.auth()->user()->avatar)}}" class="avatar" />
            </a>
            <div class="dropdown-menu">
              <a href="{{route('account-setting')}}" class="dropdown-item">Account Settings</a>
              <a href="{{route('logout')}}" class="dropdown-item">Log Out</a>
            </div>
          </div>
        </div>




        <form action="{{route('store-project')}}" method="post" class="modal fade" id="add-project" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add Project</h5>
                      <button type="button" class="close btn btn-round" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">close</i>
                      </button>
                    </div>
                    <!--end of modal head-->
                    <ul class="nav nav-tabs nav-fill" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="project-edit-details-tab" data-toggle="tab" href="#project-edit-details" role="tab" aria-controls="project-edit-details" aria-selected="true">Details</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="project-edit-members-tab" data-toggle="tab" href="#project-edit-members" role="tab" aria-controls="project-edit-members" aria-selected="false">Members</a>
                      </li>
                    </ul>
                    <div class="modal-body">
                      <div class="tab-content">
                        <div class="tab-pane fade show active" id="project-edit-details" role="tabpanel">
                          <h6>General Details</h6>
                          <div class="form-group row align-items-center">
                            <label class="col-3">Name</label>
                            <input class="form-control col" type="text" value="Brand Concept and Design" name="project_name" />
                          </div>
                          <div class="form-group row">
                            <label class="col-3">Description</label>
                            <textarea class="form-control col" rows="3" placeholder="Project description" name="project_description">Research, ideate and present brand concepts for client consideration</textarea>
                          </div>
                          <hr>
                          <h6>Timeline</h6>
                          <div class="form-group row align-items-center">
                            <label class="col-3">Start Date</label>
                            <input class="form-control col" type="text" name="start_date" placeholder="Select a date" data-flatpickr data-default-date="2021-04-21" data-alt-input="true" />
                          </div>
                          <div class="form-group row align-items-center">
                            <label class="col-3">Due Date</label>
                            <input class="form-control col" type="text" name="due_date" placeholder="Select a date" data-flatpickr data-default-date="2021-09-15" data-alt-input="true" />
                          </div>
                          <div class="alert alert-warning text-small" role="alert">
                            <span>You can change due dates at any time.</span>
                          </div>
                          <hr>
                          <h6>Visibility</h6>
                          <div class="row">
                            <div class="col">
                              <div class="custom-control custom-radio">
                                <input type="radio" id="visibility-everyone" name="visibility" class="custom-control-input" value="everyone" >
                                <label class="custom-control-label" for="visibility-everyone">Everyone</label>
                              </div>
                            </div>
                            <div class="col">
                              <div class="custom-control custom-radio">
                                <input type="radio" id="visibility-members" name="visibility" class="custom-control-input" value="members">
                                <label class="custom-control-label" for="visibility-members">Members</label>
                              </div>
                            </div>
                            <div class="col">
                              <div class="custom-control custom-radio">
                                <input type="radio" id="visibility-me" name="visibility" class="custom-control-input" value="justme" checked>
                                <label class="custom-control-label" for="visibility-me">Just me</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="project-edit-members" role="tabpanel">
                          <div class="users-manage" data-filter-list="form-group-users">
                            <div class="mb-3">
                              <ul class="avatars text-center">

                                <li>
                                  <img alt="Claire Connors" src="assets/img/avatar-female-1.jpg" class="avatar" data-toggle="tooltip" data-title="Claire Connors" />
                                </li>

                                <li>
                                  <img alt="Marcus Simmons" src="assets/img/avatar-male-1.jpg" class="avatar" data-toggle="tooltip" data-title="Marcus Simmons" />
                                </li>

                                <li>
                                  <img alt="Peggy Brown" src="assets/img/avatar-female-2.jpg" class="avatar" data-toggle="tooltip" data-title="Peggy Brown" />
                                </li>

                                <li>
                                  <img alt="Harry Xai" src="assets/img/avatar-male-2.jpg" class="avatar" data-toggle="tooltip" data-title="Harry Xai" />
                                </li>

                              </ul>
                            </div>
                            <div class="input-group input-group-round">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">filter_list</i>
                                </span>
                              </div>
                              <input type="search" class="form-control filter-list-input" placeholder="Filter members" aria-label="Filter Members">
                            </div>
                            <div class="form-group-users">

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="project-user-1" checked>
                                <label class="custom-control-label" for="project-user-1">
                                  <span class="d-flex align-items-center">
                                    <img alt="Claire Connors" src="assets/img/avatar-female-1.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Claire Connors</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="project-user-2" checked>
                                <label class="custom-control-label" for="project-user-2">
                                  <span class="d-flex align-items-center">
                                    <img alt="Marcus Simmons" src="assets/img/avatar-male-1.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Marcus Simmons</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="project-user-3" checked>
                                <label class="custom-control-label" for="project-user-3">
                                  <span class="d-flex align-items-center">
                                    <img alt="Peggy Brown" src="assets/img/avatar-female-2.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Peggy Brown</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="project-user-4" checked>
                                <label class="custom-control-label" for="project-user-4">
                                  <span class="d-flex align-items-center">
                                    <img alt="Harry Xai" src="assets/img/avatar-male-2.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Harry Xai</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="project-user-5">
                                <label class="custom-control-label" for="project-user-5">
                                  <span class="d-flex align-items-center">
                                    <img alt="Sally Harper" src="assets/img/avatar-female-3.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Sally Harper</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="project-user-6">
                                <label class="custom-control-label" for="project-user-6">
                                  <span class="d-flex align-items-center">
                                    <img alt="Ravi Singh" src="assets/img/avatar-male-3.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Ravi Singh</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="project-user-7">
                                <label class="custom-control-label" for="project-user-7">
                                  <span class="d-flex align-items-center">
                                    <img alt="Kristina Van Der Stroem" src="assets/img/avatar-female-4.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Kristina Van Der Stroem</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="project-user-8">
                                <label class="custom-control-label" for="project-user-8">
                                  <span class="d-flex align-items-center">
                                    <img alt="David Whittaker" src="assets/img/avatar-male-4.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">David Whittaker</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="project-user-9">
                                <label class="custom-control-label" for="project-user-9">
                                  <span class="d-flex align-items-center">
                                    <img alt="Kerri-Anne Banks" src="assets/img/avatar-female-5.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Kerri-Anne Banks</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="project-user-10">
                                <label class="custom-control-label" for="project-user-10">
                                  <span class="d-flex align-items-center">
                                    <img alt="Masimba Sibanda" src="assets/img/avatar-male-5.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Masimba Sibanda</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="project-user-11">
                                <label class="custom-control-label" for="project-user-11">
                                  <span class="d-flex align-items-center">
                                    <img alt="Krishna Bajaj" src="assets/img/avatar-female-6.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Krishna Bajaj</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="project-user-12">
                                <label class="custom-control-label" for="project-user-12">
                                  <span class="d-flex align-items-center">
                                    <img alt="Kenny Tran" src="assets/img/avatar-male-6.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Kenny Tran</span>
                                  </span>
                                </label>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--end of modal body-->
                    <div class="modal-footer">
                      <button role="button" class="btn btn-primary" type="submit">
                        Save
                      </button>
                    </div>
                  </div>
                </div>
              </form>