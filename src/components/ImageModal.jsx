export default function ImageModal({ isOpen, imageSrc, onClose }) {
  return (
    <div className={`modal ${isOpen ? 'active' : ''}`} onClick={onClose}>
      <span className="close" onClick={onClose}>&times;</span>
      {imageSrc && <img className="modal-content" src={imageSrc} alt="Enlarged" />}
    </div>
  )
}
