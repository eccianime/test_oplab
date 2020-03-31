import React from 'react';

import appstore from '../images/appstore.png';
import playstore from '../images/playstore.png';

export default class Intro extends React.Component{
	render(){
		return (
			<div className="intro intro-app">
				<div className="intro-text">
					<h4 className="wow fadeInDown">Messenger for Anonymous</h4>
					<h1 className="wow fadeInDown" data-wow-delay=".1s">Send voice and text message anonymously</h1>
					<p className="wow fadeInDown">
						Aria is a messenger for people who prefer anonymity. Chat, call and hangout with friends anonymously.
						Aria is a tor for private conversations. None can catch thou.
					</p>
					<h3 className="wow fadeInDown">Download Aria for free on </h3>
					<a href="/" className="wow fadeInDown" data-wow-delay=".2s"><img className="img-responsive" src={appstore} alt="Icon" /></a>
					<a href="/" className="wow fadeInDown" data-wow-delay=".2s"><img className="img-responsive" src={playstore} alt="Icon" /></a>
				</div>
			</div>
		)
	}
}