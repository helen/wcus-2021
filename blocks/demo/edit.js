/* eslint-disable */
/**
 * WordPress dependencies
 */
 import {
	RichText,
	useBlockProps
} from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';

/**
 * Edit component.
 * See https://wordpress.org/gutenberg/handbook/designers-developers/developers/block-api/block-edit-save/#edit
 *
 * @param {Object} props The block props.
 * @return {Function} Render the edit screen
 */
const Edit = ( { isSelected, attributes, setAttributes } ) => {
	const blockProps = useBlockProps( {
		className: 'wcus-demo',
	});
	const {
		label,
		headline,
		description,
	} = attributes;

	return (
		<>
			<div {...blockProps}>
				<div className='wcus-demo__inner'>
				  { (isSelected || label) && (
					  <RichText
						  placeholder={ __( 'Label text here', 'wcus-2021' ) }
						  value={label}
						  onChange={ (value) => { setAttributes( { label: value } ) } }
						  tagName="span"
						  allowedFormats={[]}
						  className="wcus-demo__label"
					  />
				  ) }
				  <RichText
						placeholder={ __( 'Headline here', 'wcus-2021' ) }
						value={headline}
						onChange={ (value) => { setAttributes( { headline: value } ) } }
						tagName="h2"
						allowedFormats={[]}
						className={`wcus-demo__title`}
					/>
				  { (isSelected || description) && (
					  <div className="wcus-demo__desc">
						<RichText
							placeholder={ __( 'Description here', 'wcus-2021' ) }
							value={description}
							onChange={ (value) => { setAttributes( { description: value } ) } }
							tagName="p"
							allowedFormats={['core/bold', 'core/italic']}
						/>
					  </div>
				  ) }
				</div>
			</div>
		</>
	);
};
export default Edit;
