<?php

namespace DeployerForGit\Providers;

/**
 * Class GiteaProvider
 *
 * @package Wp_Git_Deployer
 */
class GiteaProvider extends BaseProvider {

	/**
	 * Get provider repository handle
	 *
	 * @return string Repository handle
	 */
	public function get_pretty_name() {
		return 'Gitea';
	}

	/**
	 * Get provider repository zip URL
	 *
	 * @param  string $branch   Branch name, default is master.
	 * @return string           Repository URL to download zip
	 */
	public function get_zip_repo_url( $branch = 'master' ) {
		$handle = $this->get_handle();

		return "https://gitea.com/api/v1/repos/{$handle}/archive/{$branch}.zip";
	}

	/**
	 * Validate repository url
	 *
	 * @return WP_Error|boolean
	 */
	protected function validate_repo_url() {
		parent::validate_repo_url();

		// check if string has exact format in a URL like this: https://gitea.com/owner/reponame .
		if ( ! preg_match( '/^https:\/\/gitea.com\/[a-zA-Z0-9-_]+\/[a-zA-Z0-9-_]+$/', $this->get_repo_url() ) ) {
			return new \WP_Error( 'invalid', __( 'Repository url must be a valid Gitea repository url', 'deployer-for-git' ) );
		}
	}
}
