import * as React from "react"
import { ChevronLeft, ChevronRight } from "lucide-react"
import { Button } from "@/components/ui/button"
import { cn } from "@/lib/utils"

interface SliderProps {
  children: React.ReactNode
  className?: string
  autoPlay?: boolean
  interval?: number
}

export function Slider({ children, className, autoPlay = true, interval = 5000 }: SliderProps) {
  const [currentSlide, setCurrentSlide] = React.useState(0)
  const childrenArray = React.Children.toArray(children)
  const totalSlides = childrenArray.length

  const nextSlide = () => {
    setCurrentSlide((prev) => (prev + 1) % totalSlides)
  }

  const prevSlide = () => {
    setCurrentSlide((prev) => (prev - 1 + totalSlides) % totalSlides)
  }

  const goToSlide = (index: number) => {
    setCurrentSlide(index)
  }

  React.useEffect(() => {
    if (!autoPlay) return

    const timer = setInterval(nextSlide, interval)
    return () => clearInterval(timer)
  }, [autoPlay, interval, totalSlides])

  if (totalSlides === 0) return null

  return (
    <div className={cn("relative w-full overflow-hidden", className)}>
      <div
        className="flex transition-transform duration-500 ease-in-out"
        style={{
          transform: `translateX(-${currentSlide * 100}%)`,
        }}
      >
        {childrenArray.map((child, index) => (
          <div key={index} className="w-full flex-shrink-0">
            {child}
          </div>
        ))}
      </div>

      {/* Navigation Buttons */}
      {totalSlides > 1 && (
        <>
          <Button
            variant="outline"
            size="icon"
            className="absolute left-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white"
            onClick={prevSlide}
          >
            <ChevronLeft className="h-4 w-4" />
          </Button>
          <Button
            variant="outline"
            size="icon"
            className="absolute right-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white"
            onClick={nextSlide}
          >
            <ChevronRight className="h-4 w-4" />
          </Button>
        </>
      )}

      {/* Dots Indicator */}
      {totalSlides > 1 && (
        <div className="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
          {childrenArray.map((_, index) => (
            <button
              key={index}
              className={cn(
                "w-2 h-2 rounded-full transition-colors",
                index === currentSlide
                  ? "bg-white"
                  : "bg-white/50 hover:bg-white/75"
              )}
              onClick={() => goToSlide(index)}
            />
          ))}
        </div>
      )}
    </div>
  )
} 