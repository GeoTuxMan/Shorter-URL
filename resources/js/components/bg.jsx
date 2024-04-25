import React from 'react';
import ReactDOM from 'react-dom/client';

export default function BackgroundAnimate() {
    return (
      <ul className="background">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    )
  }

  const container = document.getElementById('bg');
const root = ReactDOM.createRoot(container);
root.render(<BackgroundAnimate />);
