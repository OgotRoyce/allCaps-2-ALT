@extends('layouts.member')
<style>
.header {
  font-family: 'Poppins', sans-serif;
  font-size: 32px;
  color: #f06548;
  display: flex; /* add this to enable flexbox */
  align-items: center; /* add this to center items vertically */
}

.header i {
  margin-right: 10px; /* adjust this value to increase/decrease the space */
}

.header-line {
  height: 1px;
  background-color: #bfbfbf;
  margin-top: 20px;
  margin-bottom: 20px;
}

.task-head {
margin-top: 10px;
  font-size: 24px;
  margin-bottom: 8px;
}
.task-email {
    font-size: 0.8rem;
}
.file-upload-card {
  background-color: #f5f5f5 !important; /* change the background color */
  margin-left: 20px;
  margin-right: 20px;
}
/* .card {
  background-color: transparent;
} */

.task {
  margin: 20px 0;
}

/* task sidebar */
.task-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
  border-radius: 18px;
}

.task-userpic {
  text-align: center;
  margin-top: 20px;
  margin-bottom: 20px;
}

.task-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  border-radius: 999px;
  align-items: center;
  border-color: #ff6600 !important;
  border-width: 3px; /* add this to set the border width */
  border-style: solid; /* add this to set the border style */
}


.task-usertitle {
  text-align: center;
  margin-top: 20px;
  align-items: center;
  color: #212529;
}

.task-head {
  margin-top: 10px;
  font-size: 24px;
  margin-bottom: 8px;
  color: #212529;
  font-weight: bold;
}


.task-usertitle-name {
    margin-top: 20px;
    color: #212529;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 10px;
  margin-left: 20px;
}

.task-usertitle-subtitle {
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
  margin-left: 20px;
}
/* task Content */
.task-content {
  padding: 20px;
  background: #fff;
  border-radius: 18px;
  height: auto;
}

.task-detail-name {
    margin-top: 20px;
  margin-bottom: 10px;
  margin-left: 20px;

}

.task-detail-head {
    color: #212529;
  font-size: 16px;
  font-weight: 600;
    margin-top: 10px;
  font-size: 30px;
  margin-bottom: 10px;
  font-weight: bold;
    text-transform: uppercase;
}
.task-detail-head:hover {
    color: #f06548;
}
.due-date {
  font-size: 1.2rem; /* add this to set the font size */
  margin-bottom: 10px;
}

.date-posted {
  font-size: 0.8rem;
  color: #878a99;
}

.task-details {
  font-size: 1.2rem; /* add this to set the font size */
  margin-bottom: 10px;
  margin-left: 20px;
  margin-right: 20px;
}

.task-attachments {
    margin-left: 20px;
}

.task-attachments-name {
    font-weight: bold;
    font-size: 0.8rem;
  color: #878a99;
}

.task-attachments-card {
  background-color: #f5f5f5;
  padding: 10px;
  border-radius: 10px;
  margin-top: 10px;
  margin-right: 20px;
}

</style>

@section('content')

<div class="container-fluid">
    <div class="row task">
		<div class="col-md-3">
			<div class="task-sidebar">
                <a href="{{route('task-member')}}"  style="margin-left: 20px;">
                <button type="button" class="btn btn-outline-danger">Back</button>
                </a>
                <div class="task-usertitle-name">
                        <h5 class="task-head">My Work</h5>
					</div>
                <div class="header-line flex-grow-1 ml-3"></div>
                <div class="task-usertitle-subtitle">      
                        <h6 class="member-email mb-2">Files Uploaded</h6>
				</div>
                <div class="card file-upload-card">
                    <div class="card-body ">
                        
                    </div>
                </div>
                <div class="header-line flex-grow-1 ml-3"></div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger w-100"><i class="fas fa-plus"></i> Attach File</button>
                </div>
			</div>
		</div>
		<div class="col-md-9">
            <div class="task-content">
                <div class="task-detail-name">
                    <h5 class="task-detail-head">Create a Project</h5>
                    <div class="due-date">
                        <p><i class="fas fa-clock" style="margin-right: 5px;"></i><strong>Due Date:</strong> May 20, 2023</p>
                    </div>
                    <div class="date-posted"> 
                    <p><i class="task-icon fas fa-flag" style="margin-right: 5px;"></i><strong>Date Posted:</strong> May 17, 2023</p>
                    </div>
                </div>
                <div class="header-line"></div>
                    <div class="task-details">
                        <p>Make sure to accomplish this and have it signed by your Project Adviser after he/she reviewed and approved the contents of your Presentation files.</p>
                    </div>
                <div class="task-attachments">      
                    <h6 class="task-attachments-name"><i class="fas fa-paperclip" style="margin-right: 5px;"></i><strong>Attachments</strong></h6>
                    <div class="task-attachments-card">
                        <div class="card-body ">
                        
                        </div>
                    </div>
				</div>
                <div class="header-line"></div>
            </div>
		</div>
	</div>
</div>
@endsection