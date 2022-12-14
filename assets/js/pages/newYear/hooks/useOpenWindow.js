import { ref } from "vue"

export default function useOpenWindow() {
  
  const window = ref(null)

  return {
    window
  }
}