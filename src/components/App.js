import React from 'react';
import AppStore from '../api/appstore';
import SearchBar from './SearchBar';
import AppStoreListing from './AppStoreListing';

class App extends React.Component {
	state = {
		apps: [],
		isLoading: false
	}

	onSearchSubmit = async (term) => {
		this.setState({ isLoading: true });

		const response = await AppStore.get( '/', {
			params: {
				term: term,
				media: 'software'
			}
		});

		const apps = response.data.results.map((app) => {
			return {
				key: app.trackId,
				iconURL: app.artworkUrl100.replace('100x100', '250x250'),
				name: app.trackName,
				creator: app.artistName
			};
		});

		this.setState({ apps, isLoading: false });
	}

	render() {
		return (
			<div className="app">
				<SearchBar onSubmit={this.onSearchSubmit} isLoading={this.state.isLoading} />
				<AppStoreListing apps={this.state.apps} />
			</div>
		);
	}
}

export default App;