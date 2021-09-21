/**
 * WordPress dependencies
 */
 import { registerBlockType } from '@wordpress/blocks';

 /**
  * Internal dependencies
  */
 import edit from './edit';
 import name, * as settings from './block.json';
 
 /* Uncomment for CSS overrides in the admin */
 // import './index.css';
 
 /**
  * Register block
  */
 registerBlockType(name, {
	 ...settings,
	 edit,
	 save: () => null,
 });
 