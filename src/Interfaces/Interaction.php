<?php

/*
 * Copyright 2017 Aaron Scherer
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE
 *
 * @package     restcord/restcord
 * @copyright   Aaron Scherer 2017
 * @license     MIT
 */

namespace RestCord\Interfaces;

/**
 * Interaction Intellisense Helper
 */
interface Interaction {

	/**
	 * @see https://discord.com/developers/docs/interactions/receiving-and-responding#edit-original-interaction-response
	 *
	 * @param array $options ['application.id' => 'snowflake', 'interaction.token' => 'string', 'thread_id' => 'snowflake', 'content' => 'string', 'embeds' => 'array', 'allowed_mentions' => 'object', 'components' => 'array', 'files' => 'file contents', 'payload_json' => 'string', 'attachments' => 'array']
	 * @return array
	 */
	public function editOriginalInteractionResponse(array $options);
}