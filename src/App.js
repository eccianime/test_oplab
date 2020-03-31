import React from 'react';

import LeftSection from './components/LeftSection';
import RightSection from './components/RightSection';

export default class App extends React.Component{
	render(){
		return (
			<div className="wrapper">
				<div className="main app-main">
					<section className="split-home">
						<LeftSection />
						<RightSection />
				 	</section>
				</div>
			</div>
		)
	}
}