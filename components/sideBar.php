<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_318O-IAc8xlV13YhA9ohRmm-XWX0KNhXih2ZVynvxChISLCV" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION["name"]; ?></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="<?php echo $root_path . 'features/dashboard/home.php'; ?>"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-files-o">&nbsp;</em> Files <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="<?php echo $root_path . 'features/file/all_files.php'; ?>">
						<span class="fa fa-files-o">&nbsp;</span> View All files
					</a></li>
					<li><a class="" href="<?php echo $root_path . 'features/file/upload_file.php'; ?>">
						<span class="fa fa-upload">&nbsp;</span> Upload A File
					</a></li>
				</ul>
            </li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-users">&nbsp;</em> Group <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a class="" href="<?php echo $root_path . 'features/group/all_groups.php'; ?>">
						<span class="fa fa-users">&nbsp;</span> View All Groups
					</a></li>
					<li><a class="" href="<?php echo $root_path . 'features/group/creategroup.php'; ?>">
						<span class="fa fa-user-plus">&nbsp;</span> Create New Group
					</a></li>
				</ul>
            </li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-3">
				<em class="fa fa-sitemap">&nbsp;</em> Company <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li><a class="" href="<?php echo $root_path . 'features/company/all_companies.php'; ?>">
						<span class="fa fa-sitemap">&nbsp;</span> View your Companies
					</a></li>
					<li><a class="" href="<?php echo $root_path . 'features/company/createcomp.php'; ?>">
						<span class="fa fa-plus">&nbsp;</span> Create A Company
					</a></li>
				</ul>
			</li>
			<li><a href="<?php echo $root_path . 'features/user/login.php'; ?>"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->