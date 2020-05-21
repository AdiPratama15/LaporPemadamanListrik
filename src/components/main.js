import React from 'react';
import ContactForm from './ContactForm';

class Main extends React.Component {
  render() {
    
    return (
      <div className='main-wrapper'>
        <div className='main'>
          <div className='copy-container'>
            <h2>Selamat datang di Situs Kami Lapor Pemadaman Listrik!</h2>
          </div>
          <div className='contact-container'>
            <h3>Hubungi Kami</h3>
            <ContactForm />
          </div>
        </div>
      </div>
    );
  }
}

export default Main;