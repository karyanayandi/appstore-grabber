import React from 'react';
import PhonePreview from '../PhonePreview/PhonePreview';
import DownloadPrompt from '../DownloadPrompt/DownloadPrompt';
import ('./AppStorePage.css');

class AppStorePage extends React.Component {
	render() {
		return (
			<div className="appstore-page">
				<PhonePreview frameURL={this.props.storePageURL} />
				
				<DownloadPrompt storePageURL={this.props.storePageURL}>
					<h1>{this.props.title}</h1>
					<p>{this.props.prompt}</p>
				</DownloadPrompt>
			</div>
		);
	}
}

export default AppStorePage;