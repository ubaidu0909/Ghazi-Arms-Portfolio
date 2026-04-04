import { useState, useEffect } from 'react'

export default function Slider({ onImageClick }) {
  const [position, setPosition] = useState(0)

  const images = [
    '/images/austin.jpg',
    '/images/benelli.jpg',
    '/images/bexar-arms-unsplash.jpg',
    '/images/bexar1-arms-unsplash.jpg',
    '/images/bexar2-arms-unsplash.jpg',
    '/images/david.jpg',
    '/images/jay.jpg',
    '/images/kemal.jpg',
    '/images/martin.jpg',
    '/images/scott.jpg',
    '/images/stngr.jpg',
    '/images/thomas.jpg',
  ]

  const handleNext = () => {
    setPosition(position - 300)
  }

  const handlePrev = () => {
    setPosition(position + 300)
  }

  return (
    <section className="weapons-slider-section">
      <h2 className="slider-title">Featured Weapons</h2>
      <div className="slider-wrapper">
        <button className="slider-btn prev" onClick={handlePrev}>&#10094;</button>
        <button className="slider-btn next" onClick={handleNext}>&#10095;</button>

        <div className="slider-container">
          <div className="slider-track" style={{ transform: `translateX(${position}px)` }}>
            {images.map((img, idx) => (
              <img
                key={idx}
                src={img}
                alt="Weapon"
                onClick={() => onImageClick(img)}
                style={{ cursor: 'pointer' }}
              />
            ))}
            {images.map((img, idx) => (
              <img
                key={`dup-${idx}`}
                src={img}
                alt="Weapon"
                onClick={() => onImageClick(img)}
                style={{ cursor: 'pointer' }}
              />
            ))}
          </div>
        </div>
      </div>
    </section>
  )
}
