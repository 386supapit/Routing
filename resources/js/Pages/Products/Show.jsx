import { useState } from "react";
import { Link } from "@inertiajs/react";

export default function Show({ product }) {
  const [currentImageIndex, setCurrentImageIndex] = useState(0);

  const handlePrevious = () => {
    setCurrentImageIndex(
      (prevIndex) => (prevIndex === 0 ? product.images.length - 1 : prevIndex - 1)
    );
  };

  const handleNext = () => {
    setCurrentImageIndex(
      (prevIndex) => (prevIndex === product.images.length - 1 ? 0 : prevIndex + 1)
    );
  };

  return (
    <div className="min-h-screen relative">
      
      <div className="absolute inset-0 bg-gradient-to-r from-brown-700 to-brown-900 opacity-80"></div>

      
      <div className="relative pt-6 z-10 px-4 sm:px-6 lg:px-8">
        <div className="pt-6">
          {/* เพิ่ม Header */}
          <div className="text-center sm:py-4 ">
            <h1 className="text-4xl font-extrabold text-brown">
              Product Details
            </h1>
          </div>

          {/* Two-column layout */}
          <div className="mx-auto mt-6 max-w-7xl grid grid-cols-1 lg:grid-cols-2 gap-8">
            {/* Left column - Product images with carousel */}
            <div className="flex flex-col items-center">
              <div className="relative w-full max-w-md">
                {/* Main Image */}
                <img
                  src={product.images[currentImageIndex]}
                  className="rounded-lg object-cover max-h-[500px] w-full transform transition-transform duration-300 hover:scale-105"
                  alt={`${product.name} - image ${currentImageIndex + 1}`}
                />

                {/* Navigation Buttons */}
                <button
                  onClick={handlePrevious}
                  className="absolute left-0 top-1/2 transform -translate-y-1/2 bg-earth-200 p-2 rounded-full shadow-lg hover:bg-earth-300"
                >
                  ❮
                </button>
                <button
                  onClick={handleNext}
                  className="absolute right-0 top-1/2 transform -translate-y-1/2 bg-earth-200 p-2 rounded-full shadow-lg hover:bg-earth-300"
                >
                  ❯
                </button>
              </div>

              {/* Thumbnail Images */}
              <div className="flex gap-2 mt-4">
                {product.images.map((image, index) => (
                  <img
                    key={index}
                    src={image}
                    alt={`Thumbnail ${index + 1}`}
                    onClick={() => setCurrentImageIndex(index)}
                    className={`h-16 w-16 rounded-lg object-cover cursor-pointer transform transition-transform duration-300 hover:scale-110 ${
                      currentImageIndex === index
                        ? "ring-2 ring-earth-400"
                        : "ring-1 ring-earth-200"
                    }`}
                  />
                ))}
              </div>
            </div>

            {/* Right column - Product info */}
            <div className="flex flex-col justify-center bg-white p-6 rounded-lg shadow-md">
              <div>
                <h1 className="text-2xl font-bold tracking-tight text-earth-800 sm:text-3xl">
                  {product.name}
                </h1>
                <p className="mt-4 text-base text-earth-600">{product.description}</p>
              </div>

              <div className="mt-6">
                <p className="text-2xl font-bold tracking-tight text-earth-900">
                  ฿{product.price}
                </p>

                <div className="mt-6">
                  <Link
                    href="/products"
                    className="mt-4 text-sm font-medium text-earth-500 hover:text-earth-700 transition-colors"
                  >
                    Back to All Products
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}





//import { Link } from "@inertiajs/react";
//export default function Show({product}){
//    return(
//        <div>
//            <h1>{product.name}</h1>
//            <p>{product.description}</p>
//            <p>Price:${product.price}</p>
//            <Link href="/products">Back to All Products</Link>
//        </div>
//    )
//}