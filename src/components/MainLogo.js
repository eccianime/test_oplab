import React from 'react';
import logo from '../images/app_icon.png';

export default class MainLogo extends React.Component{
	render(){
		return (
			<div className="main-logo">
				<a href="/"><img className="wow fadeInDown" src={logo} width="50" height="50" alt="Logo" /></a>
			</div>
		)
	}
}