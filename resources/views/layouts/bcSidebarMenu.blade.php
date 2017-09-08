		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		
		<!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
		<div class="sidebar-menu toggle-others collapsed fixed">
			
			<div class="sidebar-menu-inner">	
				
				<header class="logo-env">
					
					<!-- logo -->
					<div class="logo">
						<a href="dashboard-1.html" class="logo-expanded">
							<img src="/bcon/assets/images/logo@2x.png" width="80" alt="" />
						</a>
						
						<a href="dashboard-1.html" class="logo-collapsed">
							<img src="/bcon/assets/images/logo-collapsed@2x.png" width="40" alt="" />
						</a>
					</div>
					
					<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
					<div class="mobile-menu-toggle visible-xs">
						<a href="#" data-toggle="user-info-menu">
							<i class="fa-bell-o"></i>
							<span class="badge badge-success">7</span>
						</a>
						
						<a href="#" data-toggle="mobile-menu">
							<i class="fa-bars"></i>
						</a>
					</div>
					
					<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
					<div class="settings-icon">
						<a href="#" data-toggle="settings-pane" data-animate="true">
							<i class="linecons-cog"></i>
						</a>
					</div>
					
								
				</header>
						
				
						
				<ul id="main-menu" class="main-menu">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
					<li class="active opened active">
						<a href="">
							<i class="linecons-cog"></i>
							<span class="title">控制面板</span>
						</a>
						<ul>
							<li class="active">
								<a href="{{ route('dashboard') }}">
									<span class="title">主控面板</span>
								</a>
							</li>
							<li>
								<a href="{{route('user')}}">
									<span class="title">会员管理</span>
								</a>
							</li>
							<li>
								<a href="">
									<span class="title">访问统计</span>
								</a>
							</li>
							<li>
								<a href="">
									<span class="title">打赏订单</span>
								</a>
							</li>
							<li>
								<a href="">
									<span class="title">反馈信息</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="layout-variants.html">
							<i class="linecons-desktop"></i>
							<span class="title">内容管理</span>
						</a>
						<ul>
							<li>
								<a href="{{route('artical.index')}}">
									<span class="title">所有文章</span>
								</a>
							</li>
							<li>
								<a href="{{ route('tags.index') }}">
									<span class="title">分类管理</span>
								</a>
							</li>
							<li>
								<a href="">
									<span class="title">关键词管理</span>
								</a>
							</li>
							<li>
								<a href="">
									<span class="title">文件管理</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="ui-panels.html">
							<i class="linecons-note"></i>
							<span class="title">组队管理</span>
						</a>
						<ul>
							<li>
								<a href="">
									<span class="title">活动组队</span>
								</a>
							</li>
							<li>
								<a href="">
									<span class="title">好友聊天</span>
								</a>
							</li>
							<li>
								<a href="">
									<span class="title">打赏订单</span>
								</a>
							</li>
							<li>
								<a href="">
									<span class="title">留言</span>
								</a>
							</li>
							<li>
								<a href="">
									<span class="title">建议反馈</span>
								</a>
							</li>
							
							
						</ul>
					</li>
					<li>
						<a href="">
							<i class="linecons-mail"></i>
							<span class="title">论坛管理</span>
							<span class="label label-success pull-right">6</span>
						</a>
						<ul>
							<li>
								<a href="">
									<span class="title">帖子管理</span>
								</a>
							</li>
							<li>
								<a href="">
									<span class="title">论坛版块管理</span>
								</a>
							</li>
							<li>
								<a href="">
									<span class="title"></span>
								</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#">
							<i class="linecons-cloud"></i>
							<span class="title">Menu Levels</span>
						</a>
						<ul>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.1</span>
								</a>
								<ul>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.1</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.2</span>
										</a>
										<ul>
											<li>
												<a href="#">
													<i class="entypo-flow-cascade"></i>
													<span class="title">Menu Level 3.1</span>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="entypo-flow-cascade"></i>
													<span class="title">Menu Level 3.2</span>
												</a>
												<ul>
													<li>
														<a href="#">
															<i class="entypo-flow-branch"></i>
															<span class="title">Menu Level 4.1</span>
														</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.3</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.2</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.3</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
						
			</div>
			
		</div>