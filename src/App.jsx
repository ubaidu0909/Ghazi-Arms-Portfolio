import { useState, useEffect } from 'react'
import Navbar from './components/Navbar'
import Hero from './components/Hero'
import Slider from './components/Slider'
import Content from './components/Content'
import About from './components/About'
import Products from './components/Products'
import Contact from './components/Contact'
import Footer from './components/Footer'
import ImageModal from './components/ImageModal'
import './App.css'

function App() {
  const [activeSection, setActiveSection] = useState('home')
  const [modalOpen, setModalOpen] = useState(false)
  const [modalImage, setModalImage] = useState('')

  useEffect(() => {
    const handleHashChange = () => {
      const hash = window.location.hash.replace('#', '') || 'home'
      setActiveSection(hash)
    }

    window.addEventListener('hashchange', handleHashChange)
    handleHashChange()

    return () => window.removeEventListener('hashchange', handleHashChange)
  }, [])

  const openModal = (imageSrc) => {
    setModalImage(imageSrc)
    setModalOpen(true)
  }

  const closeModal = () => {
    setModalOpen(false)
  }

  return (
    <div className="App">
      <Navbar activeSection={activeSection} />
      <Hero />
      <Slider onImageClick={openModal} />
      <Content />
      <About />
      <Products onImageClick={openModal} />
      <Contact />
      <Footer />
      <ImageModal isOpen={modalOpen} imageSrc={modalImage} onClose={closeModal} />
    </div>
  )
}

export default App
