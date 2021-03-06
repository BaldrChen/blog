{extend name="glob/base" /}
{block name="sidebar"}
	{include file='glob/sidebar_usercenter'}
{/block}
{block name="content"}
	<div class="row">
		<div class="col-md-12">
				<div class="page-header">
					<h1>评论管理</h1>
				</div>


				<div class="bs-example" data-example-id="striped-table">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>评论文章</th>
								<th>评论时间</th>
								<th>评论内容</th>
								<th>评论人</th>
								<th>当前状态</th>
								<td>管理</td>
							</tr>
						</thead>
						<tbody>
							
						{volist name="mData" id="list" }
							<tr>
								<th scope="row">{$list->id}</th>
								<td maxlenth="5">
									<a href="{$list->chen_content->url}">{$list->chen_content->Caption}...</a>
								</td>
								<td>{$list->create_time}</td>
								<td>{$list->com}...</td>

								<td><a href="{$list->chen_user->blogurl}">{$list->chen_user->nick}</a></td>



									<td>
										<a href='{:url("index/userblog/status",["id"=>$list->id,"differ"=>"comment", "type"=>"comment_result", "status"=>$list->comment_result_status])}' class="btn btn-danger">
												{$comment_result_status[$list->comment_result_status]}
										</a>
									</td>


								<th>
									<a href="{:url('index/userblog/del',["id"=>$list->id,"differ"=>"comment"])}" class="btn btn-primary">删除</a>
								</th>
								
							</tr>
						{/volist}
						</tbody>
					</table>
					{$mData|raw}
				</div>			
		</div>


		

	</div>
{/block}