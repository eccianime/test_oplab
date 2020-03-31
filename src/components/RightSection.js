import React from 'react';

import MainLogo from './MainLogo';
import Intro from './Intro';
import Footer from './Footer';

export default class RightSection extends React.Component{
	render(){
		return (
			<section className="right-section">
				<MainLogo />
				<Intro />
				<Footer />
			</section>
		)
	}
}