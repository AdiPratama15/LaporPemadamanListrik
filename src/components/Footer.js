import React from 'react';

class Footer extends React.Component {
  render() {
    return (
      <div className='footer'>
        <div className='footer-inner'>
          <div className='footer-logo'>
            <img src='/logo.png' />
            <p></p>
          </div>
          <ul className='footer-list'>
            <li>Tentang Kami</li>
            <li>FAQ</li>
            <li>Hubungi Kami</li>
          </ul>
        </div>
      </div>
    );
  }
}

export default Footer;
