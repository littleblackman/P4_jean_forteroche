<?php
// Index frontend controller

require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function posts_list($postsPerPage, $page) {
	$postManager = new PostManager();
	$numberOfPages = $postManager->countPages($postsPerPage);

	$pageNumber = $page;

	if ($pageNumber > $numberOfPages) {
		$pageNumber = $numberOfPages;
	}

	$firstIndex = ($pageNumber - 1) * $postsPerPage;

	$resp = $postManager->pager($firstIndex, $postsPerPage);
	
	require('view/frontend/indexView.php');	
}

function post_comments() {
	$postManager = new PostManager();
	$commentManager = new CommentManager();

	$post = $postManager->get_post($_GET["id"]);
	$comments = $commentManager->get_postComments($_GET["id"]);
	
	require('view/frontend/postView.php');
}

function new_comment($author, $comment, $post_id)
{
	$commentManager = new CommentManager();
	$new_entry = $commentManager->add_comment($author, $comment, $post_id);
	if ($new_entry === false)
	{
		throw new Exception('Impossible d\'ajouter le commentaire !');
	}
	else
	{
		header('location: index.php?action=post&id=' . $post_id);
	}
}

function comment_warning($post_id, $comment_id) {
	$commentManager = new CommentManager();
	$newWarningStatus = $commentManager->updateWarning($comment_id);

	if ($newWarningStatus === false)
	{
		throw new Exception('Impossible de signaler le commentaire !');
	}
	else
	{
		header('location: index.php?action=post&id=' . $post_id);
	}
}